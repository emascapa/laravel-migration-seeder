<?php

namespace App\Http\Controllers;

//importo TRip
use App\Trip;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home() {

        $trips = Trip::all();

        //dd($trips);

        return view('home', compact('trips'));
    }
}
