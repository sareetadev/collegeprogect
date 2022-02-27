<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }

    public function submit(Request $request){
        // validate data 
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // login code 
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }

        return redirect('login')->withError('Login details are not valid');

    }

    public function register()
    {
        return view('frontend.register');
    }

    public function registered(Request $request){
        // validate 
        $request->validate([
            'userName'=>'required',
            'email' => 'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

        // save in users table 
        
        User::create([
            'FullName'=>$request->name,
            'userName'=>$request->name,
            'email'=>$request->email,
            'password'=> \Hash::make($request->password)
        ]);

        // login user here 
        
        if(\Auth::attempt($request->only('username','password'))){
            return redirect('home');
        }

        return redirect('register')->withError('Error');


    }



    public function home(){
        return view('home');
    }

     public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }

    
}
