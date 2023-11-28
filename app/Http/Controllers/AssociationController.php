<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssociationController extends Controller
{
    public function AssociationDashboard()
    {
        return view('association.associationdashboard'); 
    }
}
