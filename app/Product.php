<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Description;

class Product extends Model
{
    public function Description()
    {
        return $this->hashOne(App\Description::class,'Product_id','id');
    }
}
