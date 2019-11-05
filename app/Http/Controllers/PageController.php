<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function index()
    {
        $products = App\Product::All();
        $categories = App\Category::All();
        return view('products/index', compact('products', 'categories'));
    }

    public function profile()
    {
    	$products = App\Product::All();
        $categories = App\Category::All();
        return view('pages/profile', compact('products', 'categories'));
    }
}


