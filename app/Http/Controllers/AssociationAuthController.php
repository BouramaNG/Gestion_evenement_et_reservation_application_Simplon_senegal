<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssociationAuthController extends Controller
{
    // AssociationAuthController.php
public function showLoginForm()
{
    return view('association.login'); // Assurez-vous d'avoir une vue appropriée pour la connexion des associations
}

// AssociationAuthController.php
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('association')->attempt($credentials)) {
        // L'association est connectée avec succès
        return redirect()->intended('/dashboard');
    }

    // Échec de l'authentification, redirigez l'utilisateur vers la page de connexion
    return redirect()->route('association.login')->with('error', 'Identifiants incorrects.');
}


}
