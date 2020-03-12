<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultys extends Model
{
    protected $table = 'facultys';
    protected $fillable  = ['id','fac_id','fac_name'];
}
