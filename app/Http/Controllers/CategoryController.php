<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class CategoryController extends Controller
{
  public function index(){

    $categories = Category::all();
    //dd('$categories');
      return view('backend.layouts.category',compact('categories'));


  }
  public function editcategory($id)
  {


  $categories= Category::where('id',$id)->first();
  return view('backend.layouts.Product.editCategory', compact('categories'));
  }
      public function delete($id)
      {
  //        dd(" This product is deleted sucessfully");
          Category::destroy($id);
          return redirect()->back();
      }

      public function create()
      {
          return view('backend.layouts.Product.addCategory');
      }
      public function store(Request $request)
      {
          $request->validate([
              'id' => 'required',
              'name' => 'required',
              'icon' => 'required',
              'description' => 'required',

          ]);

      try {
              $data= [
                  'id' => $request->get('productId'),
                  'name' => $request->get('productName'),
                  'icon' => $request->get('category'),
                  'description' => $request->get('Brand'),

              ];

             Category::create($data);
              return redirect()->route('Category.new');
          } catch (Exception $exception) {
              // dd($exception);
          }

      }
}
