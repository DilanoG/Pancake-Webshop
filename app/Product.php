<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function categories(){
        return $this->belongsToMany('App\Category', 'categories_products');
    }
}
