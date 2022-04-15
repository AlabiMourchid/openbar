<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvenementController extends Controller
{
    //

    public function show(){
        return view('evenements');
    }

    public function details(){
        return view('evenement-details');
    }
}
