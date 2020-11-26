<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_graduation_detail extends Model
{
    protected $fillable=['name','subject','grade','year','institute','state','country','key'];
}
