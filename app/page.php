<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $fillable = array('title','desription','seo_title','meta_desription','alias');

}
