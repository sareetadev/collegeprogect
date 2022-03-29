<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function site(){
        return view('backend.layouts.site');
    }
    public function updateSite(){
        return view('backend.layouts.update');
    }
}
