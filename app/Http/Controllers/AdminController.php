<?php

namespace App\Http\Controllers;

use App\Admins;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function adminLogin(){

      return view('backend.admin.adminLogin');
  }

public function submit(Request $request){
    // dd($request->all());
    $request->validate([
        'username' => 'required',
        'password' => 'required'
    ]);
    $adminLogin=Admins::where('username',$request->username)->first();
    dd($adminLogin);
}
public function logout(){
    return view('backend.admin.logout');
}
}
