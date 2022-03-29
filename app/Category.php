<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $gaurded = ['id'];
  //  public function Product(){
   //     return $this->hasMany(Product::class,'Category_id','id');
    //}
}
