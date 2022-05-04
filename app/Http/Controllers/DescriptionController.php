<?php

namespace App\Http\Controllers;
use App\Product;
use App\Description;
use Illuminate\Http\Request;
class DescriptionController extends Controller
{
   public function index(){
       $data['products'] = Product::all();

       $descriptions = Description::all();
       //dd(' $descriptions');
       return view('backend.layouts.Product.description',compact('descriptions'));
   }
   public function des_create()
      {
          return view('backend.layouts.Product.createdes');
      }
      public function des_store(Request $request)
      {
          $request->validate([
              'id' => 'required',
              'product_id' => 'required',
              'productName' => 'required',
               'descriptions' => 'required',

          ]);
//dd('hjh');
      try {
              $data= [
       'id' => $request->get('id'),
                  'product_id' => $request->get('product_id'),
                  'productName' => $request->get('productName'),
                   'descriptions' => $request->get('descriptions'),

              ];

              Description::create($data);

              return redirect()->route('description');
          } catch (Exception $exception) {
              //dd($exception);
          }


      }

}


