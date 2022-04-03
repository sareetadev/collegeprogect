<?php

namespace App\Http\Controllers;

//use App\Category;
use App\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
       // dd($products);
        return view('backend.layouts.productList', compact('products'));
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
        return view('backend.layouts.Product.product');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'productId' => 'required',
            'productName' => 'required',
            'category' => 'required',
            'Brand' => 'required',
            'price' => 'required',
            'rentingPrice' => 'required',
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
                'price' => $request->get('price'),
                'rentingPrice' => $request->get('rentingPrice'),
                'imag' =>$image_url ?? '' ,

            ];

       Product::where('id', $id)->update($data);

       return redirect()->route('Product');
        } catch (Exception $exception) {
            // dd($exception);
        }

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
                'price' => $request->get('price'),
                'rentingPrice' => $request->get('rentingPrice'),
                'imag' =>$image_url ?? '' ,

            ];

            Product::create($data);
            return redirect()->route('product');
        } catch (Exception $exception) {
            // dd($exception);
        }

    }
    public function createProduct( )
    {
        $data['products'] = Product::all();
        return view('backend.layouts.Product.product', $data);

    }


}







