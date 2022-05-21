<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'category';
    protected $fillable = ['name','icon','description'];

    // protected $gaurded = ['id'];

    protected $gaurded = ['id'];

  //  public function Product(){
   //     return $this->hasMany(Product::class,'Category_id','id');
    //}
}
