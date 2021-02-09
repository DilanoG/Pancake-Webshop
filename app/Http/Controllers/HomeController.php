<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    public function index()
    {
        $categories = app\Category::all();
        $products = app\Product::all();
        return view('pages/home', compact('categories', 'products'));
    }
}
