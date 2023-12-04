<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Association;
use App\Models\Reservation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Mail\ReservationRefusee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ReservationRefused;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AssociationController extends Controller
{


    public function Acceuil()
    {
        $user = User::all()->where('role==association');
        $event = Evenement::all();
        return view('dashboard',compact('event','user'));
    }
    public function AssociationDashboard()
    {

        $user = User::where('role', 'association')->get();
        $events =  Evenement::all();
          return view('association.associationdashboard',compact('events','user'));
      
    }
 public function PageAsso()
 {
    return view('association.associationdashboard');
 }
    public function BecomeAssociate()
    {
        return view('auth.become-associate');
    }

   
    public function  AssociationRegister(Request $request) {

      

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users', 'regex:/^[a-zA-Z ]+$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'phone' => ['required', 'regex:/^(77|78)\d{7}$/'], 
           
        ]);
        $logoPath = $request->file('logo')->store('logos', 'public');
        $user = User::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'date_inscription_association' => $request->date_inscripton_association,
            'password' => Hash::make($request->password),
            'slogan' => $request->slogan,
            'logo' => $logoPath,
            'role' => 'association',
            'status' => 'inactive',
            
        ]);

  

       
        return redirect()->back()->with('success','Vous vous etes inscrit avec succe');

    }
   
  


    public function addEvent(Request $request)
{
    $user = Auth::user();

    $evenement = new Evenement();
    $evenement->libelle = $request->libelle;
    $evenement->date_limite_inscription = $request->date_limite_inscription;
    $evenement->description = $request->description;
    $evenement->lieux = $request->lieux;

    if ($request->file('photo')) {
        $file = $request->file('photo');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('public/image'), $filename);
        $evenement->photo = $filename;
    }

    $evenement->total_place = $request->total_place;
    $evenement->date_evenement = $request->date_evenement;
    $evenement->closed = $request->closed;
    $evenement->user_id = $user->id;
    $evenement->save();
    $this->generateQRCode($evenement->id);
    return redirect()->back()->with('success', 'L\'insertion a été effectuée avec succès.');
}


public function generateQRCode($eventId)
{

    $event = Evenement::findOrFail($eventId);
    $qrCode = QrCode::generate(route('details', ['id' => $event->id, 'libelle' => $event->libelle]));

    $filename = 'image/' . $event->libelle . '.png';
    file_put_contents(public_path($filename), $qrCode);

    $event->qr_code_path = $filename;
    $event->save();
}

public function ListeEvenement()
{
    $user = Auth::user();
    $events = Evenement::where('user_id', $user->id)->get();

    return view('association.listeevenement', compact('events'));
}


public function DeleteEvent($id)
{

    $event = Evenement::find($id);

    if ($event) {
        $event->delete();
        return redirect()->back();
    } else {
        return redirect()->back()->with('error', 'Événement non trouvé.');
    }
}


public function UpdateEvent($id)
{

    $event = Evenement::find($id);

    if ($event) {
        return view('association.modifie')->with('event', $event);
    } else {
        return redirect()->back()->with('error', 'Événement non trouvé.');
    }

}

public function UpdateEventPost(Request $request,$id)
{
    $user = Auth::user();  
    $evenement = Evenement::find($id);

    if (!$evenement) {
        return redirect()->back()->with('error', 'Événement non trouvé.');
    }

   
    $evenement->libelle = $request->libelle;   
    $evenement->date_limite_inscription = $request->date_limite_inscription;  
    $evenement->description = $request->description;
    $evenement->lieux = $request->lieux;

    if ($request->file('photo')) { 
        $file = $request->file('photo');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('public/image'), $filename); 
        $evenement['photo'] = $filename; 
    }

    $evenement->total_place = $request->total_place;
    $evenement->date_evenement = $request->date_evenement;  
    $evenement->closed = $request->closed;     
    $evenement->user_id = $user->id;   
    $evenement->save();        

    return redirect()->back()->with('success', 'Événement mis à jour avec succès.');
}

 public function VendorLogin()
 {
    return view('association.association_login');
 }

 public function Details($id)
 {
    $event = Evenement::find($id);
    return view('association.detail',compact('event'));
 }

 public function AllReservation()
 {

    $reservations = Reservation::all(); 
    return view('association.listreservation',compact('reservations'));
 }

 public function accept($id)
{
    $reservation = Reservation::find($id);
    $reservation->est_accepted = true;
    $reservation->save();

 

    return redirect()->back()->with('success', 'Vous avez activé cette réservation.');
}

public function refuse($id)
{
    $reservation = Reservation::find($id);
    $reservation->est_accepted = false;
    $reservation->save();
    $userEmail = $reservation->user->email; 
    $subject = 'Réservation refusée';

    Mail::to($userEmail)->send(new ReservationRefusee($subject));


    return redirect()->back()->with('error', 'Réservation refusée.');
}


public function search(Request $request)
{
    $query = $request->input('query');
    $filterName = $request->has('filter_name');
    $filterLocation = $request->has('filter_location');
    $filterAssociation = $request->has('filter_association');

    $events = Evenement::query();

    if ($filterName) {
        $events->where('libelle', 'like', '%' . $query . '%');
    }

    if ($filterLocation) {
        $events->where('lieux', 'like', '%' . $query . '%');
    }

    

    $results = $events->get();

    return view('association.search', compact('results'));
}

}



