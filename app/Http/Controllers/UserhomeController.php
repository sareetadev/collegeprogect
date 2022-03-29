<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserhomeController extends Controller
{
    public function userhome(){
        return view('frontend.ulayouts.userhome');
    }
}
