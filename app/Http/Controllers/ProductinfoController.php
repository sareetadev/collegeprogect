<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductinfoController extends Controller
{
    public function index()
    {
        return view('frontend.aulayout.productDetails');
    }
    //

    // public functiom rentproduct( Reuest $request, $id)

    // {
    //     if(!$request->id){
    //         return redirect()->back();

    //     }
    //     $data['product'] = Product::find($request->id);
    //     if($data['data['Product']){
    //         return view("frontend.productDetails',$data);

    //     }
    //     return redirect()->back();
    // }
}
