<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CategoryController extends Controller
{
  	public function create()
    {
        return view('categories/create');
    }

    public function postCreate(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
        ]);

    	// dd($data);

        $category = new App\Category;

        $category->title = $data['title'];
        $category->save();
        return redirect('/shop');
    }

    public function delete($id)
    {
        $category = App\Category::find($id);

        $category->delete();
        return redirect('/shop');
    }

    public function edit($id)
    {
        $category = App\Category::find($id);

        return view('categories/edit', compact('category'));
    }

    public function postEdit(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
        ]);

        $category = App\Category::find($id);

        $category->title = $data['title'];
        $category->save();

        return redirect('/shop');
    }
}
