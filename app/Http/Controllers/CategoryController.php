<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function cato(){
      $cats=Category::all();
      return view('category',compact('$cats'));


  }

}
