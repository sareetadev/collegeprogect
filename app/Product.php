<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Description;

class Product extends Model
{

    protected $table = 'table_product';
protected $fillable =['productName','category','Brand','price','rentingPrice','purchasedAT','image'];

public function category()
{
       return $this->hasOne(Product::class,'id','id');


}




protected $guarded =['Id'];

   // public function Description()
    //{
   //     return $this->hashOne(App\Description::class,'Product_id','id');
    //}

}
