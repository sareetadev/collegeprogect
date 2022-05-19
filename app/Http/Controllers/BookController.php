<?php

namespace App\Http\Controllers;

use App\Book;
use App\Product;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function Booking($id){
        if(!$id){
            return false;
        }
        $data['products'] = Product::all();
        $data['id'] = $id;
        return view('frontend.aulayout.booking',$data);
    }

    public function store(Request $request , $id)
    {
        // dd('request');
         $request->validate([
            'mobile' => 'required',
            'email' => 'required',
         ]);
         
        $payment_data = [


            'user_name' => $request->get('user_name'),
            'email' => $request->get('email'),
            'mobile' => 986639575,
            'rented_date' => $request->get('rented_date'),
            'return_date' => $request->get('return_date') ?? 0,
            'product_name' => $request->get('product_name') ?? 0 ,
             'booking_no' => $request->get('booking_no'),
            'price' => $request->get('price'),
        ];

    Book::insert($payment_data);
//dd('$payment_data');
    return redirect()->route('home');

    }




}
