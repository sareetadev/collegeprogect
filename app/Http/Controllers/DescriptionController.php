<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescriptionController extends Controller
{
   public function description(){
       return view('backend.layouts.Product.description');
   }
}
