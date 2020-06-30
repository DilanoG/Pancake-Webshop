<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages/order');
    }
}
