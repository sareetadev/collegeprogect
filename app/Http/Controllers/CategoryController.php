<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function index(){

    $categories =Category::get();
    //   dd('$categories');
      return view('backend.layouts.category',compact('categories'));


  }

}
