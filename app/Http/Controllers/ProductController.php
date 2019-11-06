<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProductController extends Controller
{
  	public function create()
    {
        $categories = App\Category::All();
        return view('products/create', compact('categories'));
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
            'category' => 'required',
        ]);

        $product = new App\Product;

        $product->title = $data['title'];
        $product->desc = $data['desc'];
        $product->price = $data['price'];

        // 1
        $product->save();

        foreach($request->category as $category){
            $product->categories()->attach($category);
        }
        
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
        ]);

        $product = App\Product::find($id);

        $product->title = $data['title'];
        $product->desc = $data['desc'];
        $product->price = $data['price'];
        $product->save();

        return redirect('/shop');
    }
}
