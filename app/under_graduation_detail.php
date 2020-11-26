<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class under_graduation_detail extends Model
{
    protected $fillable=['name','subject','grade','year','institute','state','country','key'];
}
