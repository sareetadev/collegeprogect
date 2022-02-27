<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Product()
    {
        $products=Product::with('description')->get();
        dd($products);

    }
    public function Category()
    {
        $C
        Category=Category::with('Products')->first();
        dd($Category);

    }
}
