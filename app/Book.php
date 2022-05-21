<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = ['id'];
    protected $table ='books' ;

    public  function book(){

        return $this->hasOne(Books::class,'id','category_id');
    }

}
