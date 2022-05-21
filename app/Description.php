<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{

    protected $table = 'descriptions';
    protected $gaurded =['id','product_id'];



}
