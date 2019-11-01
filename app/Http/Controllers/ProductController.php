<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProductController extends Controller
{
  	public function create()
    {
        return view('shop/create');
    }

    public function postCreate(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

    	// dd($data);

        $product = new App\Product;

        $product->title = $data['title'];
        $product->desc = $data['desc'];
        $product->save();
        return redirect('/shop');
    }
}
