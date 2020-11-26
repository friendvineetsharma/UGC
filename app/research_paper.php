<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class research_paper extends Model
{
    protected $fillable = ['type','title','name','ISSN','refereed','author','year','key'];
}
