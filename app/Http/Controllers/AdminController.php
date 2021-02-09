<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role');
    }

    public function index()
    {
        $users = app\User::all();
        $categories = app\Category::all();
        $products = app\Product::all();
        foreach($products as $product){
            $category = app\Category::find($product->category_id);
            $product->category = $category;
        }
        return view('pages/admin', compact('users', 'categories', "products"));
    }
}