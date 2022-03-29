<?php

namespace App;


use Illuminate\Database\Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\auth\user as Authenticatable;

class Admin extends  Authenticatable

{
  protected $table = 'admins';
}
