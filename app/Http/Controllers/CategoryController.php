<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Category;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
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
    $data['category'] = Category::where('id',$id)->first();
    return view('backend.layouts.Product.editCategory', $data);
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

              'description' => 'required',

          ]);

      try {
              $data= [
                  'id' => $request->get('id'),
                  'name' => $request->get('name'),
                  'icon' => $request->get('icon'),
                  'description' => $request->get('description'),

              ];

             $test = Category::create($data);

              return redirect()->route('Category.new');
          } catch (Exception $exception) {
              //dd($exception);
          }


      }

}
