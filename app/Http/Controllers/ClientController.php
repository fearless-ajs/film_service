<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //Create the landing page
    public function homepage(){
        return view('user/home');
    }

}
