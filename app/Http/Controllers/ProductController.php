<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProductController extends Controller
{
  	public function create()
    {
        return view('products/create');
    }

    public function item($id)
    {
        $product = App\Product::find($id);
        return view('products/item', compact('product'));
    }

    public function postCreate(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'img' => 'required'
        ]);

    	// dd($data);

        $product = new App\Product;

        $product->title = $data['title'];
        $product->desc = $data['desc'];
        $product->price = $data['price'];
        $product->img = $data['img'];
        $product->save();
        return redirect('/shop');
    }

    public function delete($id)
    {
        $product = App\Product::find($id);
        $product->delete();
        return redirect('/shop');
    }

    public function edit($id)
    {
        $product = App\Product::find($id);

        return view('products/edit', compact('product'));
    }

    public function postEdit(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'img' => 'required',
        ]);

        $product = App\Product::find($id);

        $product->title = $data['title'];
        $product->desc = $data['desc'];
        $product->price = $data['price'];
        $product->price = $data['img'];
        $product->save();

        return redirect('/shop');
    }
}
