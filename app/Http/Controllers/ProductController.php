<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
       $products=Product::all();
    //   return view('backend.layouts.productList',compact('products'));
      return view('backend.layouts.productList');

    }

public function productlist()
    {
        //$products=Product::with('description')->get();
       // dd($products);
return view ('backend.productList');
    //}
 //   public function Category()
   // {
       // $C
       // Category=Category::with('Products')->first();
        //dd($Category);

    }
    public function create(){
        return view('backend.layouts.Product.product');

    }
    public function submit(Request $request)
    {
        $products_data=[
           'ProductName' => $request->get('ProductName'),
           'ProductName' => $request->get('Category'),
           'ProductName' => $request->get('Brand'),
           'ProductName' => $request->get('Price'),
           'ProductName' => $request->get('RentingPrice'),
           'ProductName' => $request->get('PurchasedAt'),

        ];
        Product::create($products_data);
        return redirect()->route('productList');
    }
    public function edit($id){
    if($id)
    {
        return false;
    }
    $product=Product::where ('id',$id)->First();
}

}
