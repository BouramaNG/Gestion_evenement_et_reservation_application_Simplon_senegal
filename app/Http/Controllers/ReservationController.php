<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationConfirmation;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ReservationController extends Controller
{
    public function showReservationForm($evenement_id)
    {
        
        $evenement = Evenement::findOrFail($evenement_id);
    
       
        return view('reservation.form', compact('evenement'));
    }


    public function Reserver(Request $request)
    {
        $user = Auth::user();
        $to = $user->email;
    $subject = 'Confirmation de réservation';
    $message = "Votre réservation a été confirmée avec succès pour l'événement.";

    Mail::to($to)->send(new ReservationConfirmation($subject, $message));
        $request->validate([
       
            'evenement_id' => 'unique:reservations,evenement_id,NULL,id,user_id,' . Auth::id(),
        ]);
        $existingReservation = Reservation::where('evenement_id', $request->evenement_id)
                                           ->where('user_id', $user->id)
                                           ->first();
    
        if ($existingReservation) {
           
            return redirect()->back()->with('error', 'Vous avez déjà réservé pour cet événement.');
        }

        $codeBarre = Str::uuid()->toString();

        $reservation = new Reservation();
        $reservation->evenement_id = $request->evenement_id;
        $reservation->user_id = $user->id;
        $reservation->reference = $codeBarre; 
        $reservation->place_reserver = $request->nombre_places;
        $reservation->status = $request->status;
        $reservation->reservation_date = $request->reservation_date;
        $reservation->save();
    
        $evenement = Evenement::find($request->evenement_id);
        $evenement->total_place -= $request->nombre_places;
        $evenement->save();
        $qrCode = QrCode::size(200)->generate($codeBarre);

    $qrCodePath = public_path('qrcodes/') . $codeBarre . '.png';
    file_put_contents($qrCodePath, $qrCode);
        return redirect()->back()->with('success', 'Réservation effectuée avec succès vous receverez un email de confirmation.');
    }
    
    public function showReservationForme($evenement_id)
    {
        $evenement = Evenement::findOrFail($evenement_id);
    
        $dateLimiteInscription = Carbon::parse($evenement->date_limite_inscription);
        $aujourdhui = Carbon::now();
    
        if ($aujourdhui->gt($dateLimiteInscription)) {
         
            return redirect()->route('liste_evenement')->with('error', 'La date limite d\'inscription pour cet événement est dépassée.');
        }
        return view('reservation.form', compact('evenement'));
    }
    public function Historique()
    {
       
        $user = Auth::user();
        $reserves = Evenement::join('reservations', 'evenements.id', '=', 'reservations.evenement_id')
            ->where('reservations.user_id', $user->id)
            ->get();
    
        return view('frontend.historique', compact('reserves', 'user'));
    }


    public function cancelReservation($id)
{
   
    $reservation = Reservation::find($id);

    if (!$reservation) {
        return redirect()->back()->with('error', 'Réservation non trouvée.');
    }

    $reservation->update(['canceled' => true]);

    return redirect()->back()->with('success', 'Vous voulez annuler votre reservation thieuy yalla !attendez quelques minutes.');
}

public function supprimerReservation($id)
{
    $reservation = Reservation::find($id);

    if ($reservation) {
       
        if ($reservation->evenement->association_id == Auth::user()->association_id) {
            $reservation->delete();
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à supprimer cette réservation.');
        }
    } else {
        return redirect()->back()->with('error', 'Réservation non trouvée.');
    }

}

}


