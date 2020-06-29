<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table='user';
    protected $fillable=['nama','email','password','status','point_customer'];
}
