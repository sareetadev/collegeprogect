<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $guarded = ['id'];
    public function booking(){
        return $this->hasOne(Booking::class,'id','Category_id');
    }
}
