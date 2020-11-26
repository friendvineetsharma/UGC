<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class research_publication extends Model
{
    protected $fillable = ['type','title','ISSN','refereed','author','publisher','year','key'];
}
