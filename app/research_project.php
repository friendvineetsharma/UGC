<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class research_project extends Model
{
    protected $fillable = ['title','major_minor','period','total_grant','funding','outcome','key'];
}
