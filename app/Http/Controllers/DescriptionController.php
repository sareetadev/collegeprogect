<?php

namespace App\Http\Controllers;

use App\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
   public function index(){
       $descriptions = Description::all();
       return view('backend.layouts.Product.description',compact('descriptions'));
   }

}
