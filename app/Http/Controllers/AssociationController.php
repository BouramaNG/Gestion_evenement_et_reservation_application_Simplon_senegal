<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Association;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReservationRefusee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ReservationRefused;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
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

        $notification = array(
            'message' => 'Salut a vous vous vous etes inscrit avec succee!',
            'alert-type' => 'success'
        );

       
        return redirect()->back();

    }
   
    
  
 
    //     $product_id = Evenement::insertGetId([

          
    //         'libelle' => $request->libelle,
    //         'date_evenement' => $request->date_evenement,
    //         'lieux' => $request->lieux,
    //         'description' => $request->description,

    //         'closed' => $request->closed,
    //         'date_limite_inscription' => $request->date_limite_inscription,
    //         'total_place' => $request->total_place,
           

    //     ]);

      
    //     $notification = array(
    //         'message' => 'Votre produuit a ete inserer avec succee !',
    //         'alert-type' => 'success'
    //     );

    //     return redirect()->back();
    // } 


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

    return redirect()->back()->with('success', 'L\'insertion a été effectuée avec succès.');
}

 public function ListeEvenement()
 {
    $user = User::where('role', 'association')->get();
  $events =  Evenement::all();
    return view('association.listeevenement',compact('events','user'));
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
    $userEmail = $reservation->client->email; 
    $subject = 'Réservation refusée';

    Mail::to($userEmail)->send(new ReservationRefusee($subject));


    return redirect()->back()->with('error', 'Réservation refusée.');
}

}



