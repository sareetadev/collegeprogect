<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    public function Rgtr(){
        return view('backend.admin.adminRegister');
    }
    public function smt(Request $request){
         dd($request->all());
        $request->validate([

            'username' => 'required',
            'password' => 'required'
        ]);
        $admin=Admin::where('username',$request->username)->first();
        dd($admin);
    }
  public function adminLogin(){

      return view('backend.admin.adminLogin');
  }

public function submit(Request $request){
   // dd($request->all());
    $request->validate([
        'username' => 'required',
        'password' => 'required'
    ]);
    $admin=Admin::where('username',$request->username)->first();
    //dd($adminLogin);n
    if($admin){
        if(Hash::check($request->password,$admin->password)){
            Auth::login($admin);
            return redirect()->route('adminmaster');

        }else{
            return redirect()->back()->with('error_massage','password nt matched');
        }
    }else{
        return redirect()->back()->with('error_massage','admin doesnt exits');

    }
    }

public function logout(){
    return view('backend.admin.logout');
}

public function adminmaster()
{
return view('backend.layouts.master');
}
}
