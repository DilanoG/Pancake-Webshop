<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('role');
    }

    public function item($id)
    {
        $product = App\Product::find($id);
        return view('pages/item', compact('product'));
    }

    public function create()
    {
        $categories = app\Category::all();
        return view('products/create', compact('categories'));
    }

    public function postCreate(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'category_id' => "required",
        ]);

        $product = new App\Product;

        $product->title = $data['title'];
        $product->desc = $data['desc'];
        $product->price = $data['price'];
        $product->category_id = $data['category_id'];

        $product->save();
        
        return redirect('/admin');
    }

    public function delete($id) 
    {
        $product = App\Product::find($id);
        $product->delete();
        return redirect('/admin');
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
        ]);

        $product = App\Product::find($id);

        $product->title = $data['title'];
        $product->desc = $data['desc'];
        $product->price = $data['price'];
        $product->save();

        return redirect('/admin');
    }
}
