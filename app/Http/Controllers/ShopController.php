<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ShopController extends Controller
{
    public function index()
    {
        $products = App\Product::All();
        $categories = App\Category::All();
        return view('products/view', compact('products', 'categories'));
    }

    public function admin()
    {
    	$products = App\Product::All();
        $categories = App\Category::All();
        return view('pages/admin', compact('products', 'categories'));
    }
}

