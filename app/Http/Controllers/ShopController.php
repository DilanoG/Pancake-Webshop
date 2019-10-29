<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop/view');
    }

    public function create()
    {
        return view('shop/create');
    }
}

