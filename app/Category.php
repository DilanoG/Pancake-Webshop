<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function products(){
        return $this->belongsToMany('App\Product', 'categories_products');
    }
}
