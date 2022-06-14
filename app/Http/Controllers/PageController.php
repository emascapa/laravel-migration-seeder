<?php

namespace App\Http\Controllers;

//importo TRip
use App\Trip;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index() {

        $trips = Trip::all();

        return view('home', compact('trips'));
    }
}
