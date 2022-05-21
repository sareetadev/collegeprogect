<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductinfoController extends Controller
{
    public function index()
    {
        $table_products = Product::all();
        return view('frontend.aulayout.productDetails', compact('table_products'));
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
