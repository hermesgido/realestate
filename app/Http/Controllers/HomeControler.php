<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index(){
        return view('web.index');
    }

    public function listingView(){
        return view('web.listing-view');

    }
}
