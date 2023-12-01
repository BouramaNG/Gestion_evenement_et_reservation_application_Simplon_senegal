<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $request->validate([
       
            'evenement_id' => 'unique:reservations,evenement_id,NULL,id,user_id,' . Auth::id(),
        ]);
        $existingReservation = Reservation::where('evenement_id', $request->evenement_id)
                                           ->where('user_id', $user->id)
                                           ->first();
    
        if ($existingReservation) {
           
            return redirect()->back()->with('error', 'Vous avez déjà réservé pour cet événement.');
        }

        $reservation = new Reservation();
        $reservation->evenement_id = $request->evenement_id;
        $reservation->user_id = $user->id;
        $reservation->reference = $request->reference;
        $reservation->place_reserver = $request->nombre_places;
        $reservation->status = $request->status;
        $reservation->reservation_date = $request->reservation_date;
        $reservation->save();
    
        $evenement = Evenement::find($request->evenement_id);
        $evenement->total_place -= $request->nombre_places;
        $evenement->save();
    
        return redirect()->back()->with('success', 'Réservation effectuée avec succès.');
    }
    

    public function Historique()
    {
        $user = Auth::user();

        // Utiliser la relation pour récupérer les réservations de l'utilisateur
        $reserves = $user->evenements->flatMap->reservations;
        return view('frontend.historique',compact('reserves'));
    }

}


