<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ShopController extends Controller
{
    public function index()
    {
    	$products = App\Product::All();
        return view('shop/view', compact('products'));
    }
}

