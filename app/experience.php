<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $fillable = ['type','name','designation','pay_band','pay_level','status','from','to','experience','key'];
}
