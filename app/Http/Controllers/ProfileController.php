<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages/profile');
    }
}