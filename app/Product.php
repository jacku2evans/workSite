<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array('name','description','price','image','fields','title','meta_description','alias');
}
