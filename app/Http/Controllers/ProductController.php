<?php

namespace App\Http\Controllers;

//use App\Category;

use App\Category;
use App\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        $data['categories'] = Category::all();
       // dd($products);
       //$products=Product::get();
       $products = Product::latest()->paginate(20);

        return view('backend.layouts.productList',$data);
    }


    //   public function Category()
    // {
    // $C
    // Category=Category::with('Products')->first();
    //dd($Category);

    // }
    public function edit($id)
 {

 if(!$id){
    return false;
 }
 $data['categories'] = Category::all();

 $data['product'] = Product::where('id',$id)->first();
 return view('backend.layouts.Product.editproduct', $data);
 }
    public function delete($id)
    {
 //        dd(" This product is deleted sucessfully");
        Product::destroy($id);
        return redirect()->back();
    }

    public function create()
    {
        $data['products'] = Product::all();
        $data['categories'] = Category::all();
        return view('backend.layouts.Product.product',$data);
        //dd('dfdf');
    }

    public function productstore(Request $request)
    {

        $request->validate([
            'productId' => 'required',
            'productName' => 'required',
            'category' => 'required',
            'Brand' => 'required',
            'price' => 'required',
            'rentingPrice' => 'required',
            'purchasedAt' => 'required',
            'image' => 'required',


        ]);

        $image_url='';
        if($request->hasfile('image')){
            $file = $request->file('image');
            $new_name = str_random(5).time().$file->getClientOriginalName();
            $upload_path =public_path('/uploads');
            $file->move($upload_path, $new_name);
            $image_url = asset('uploads/' .$new_name);
        }
        //dd('dfjdjfg');

     try {

            $data= [
                'productId' => $request->get('productId'),
                'productName' => $request->get('productName'),
                'category' => $request->get('category'),
                'Brand' => $request->get('Brand'),
                'Price' => $request->get('Price'),
                'rentingPrice' => $request->get('rentingPrice'),
                'purchasedAt'=> $request->get('purchasedAt'),
                'image' =>$image_url ?? '' ,

            ];


            Product::create($data);

            return redirect()->route('productList');
        } catch (Exception $exception) {
           dd($exception);
        }

     }


      public function update(Request $request, $id)
        {
     //    dd($request->all());
        $request->validate([
            'productId' => 'required',
            'productName' => 'required',
            'category' => 'required',
            'Brand' => 'required',
            'price' => 'required',
            'rentingPrice' => 'required',
            'purchasedAt' => 'required',
            'image' => 'required',

        ]);
        $image_url='';
        if($request->hasfile('image')){
            $file = $request->file('image');
            $new_name = str_random(5).time().$file->getClientOriginalName();
            $upload_path =public_path('/uploads');
            $file->move($upload_path, $new_name);
            $image_url = asset('uploads/' .$new_name);
        }
     try {
            $data= [
                'productId' => $request->get('productId'),
                'productName' => $request->get('productName'),
                'category' => $request->get('category'),
                'Brand' => $request->get('Brand'),
                'Price' => $request->get('Price'),
                'rentingPrice' => $request->get('rentingPrice'),
                'purchasedAT'=> $request->get('purchasedAt'),
                'imag' =>$image_url ?? '' ,

            ];

         Product::where('id', $id)->update($data);

         return redirect()->route('productList');
         } catch (Exception $exception) {
            // dd($exception);
        }

    }

    public function Booking(Request $request, $id)
    {
        if (!$request->id){
            return redirect()->back();
        }
        $data['product'] = Product::find($request->id);
        if($data['product']){
            return view('frontend.aulayout.booking', $data);
        }
       return redirect()->back();
    }




}







