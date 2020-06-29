<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <div class="m-auto flex items-center justify-center py-8">
        <ul class="font-hairline text-sm">
            <li class="inline-block mx-5"><a href="{{ url('/home')}}">HOME</a></li>
            <li class="inline-block mx-5"><a href="{{ url('/shop')}}">SHOP</a></li>
            <li class="inline-block mx-5"><a href="{{ url('/home')}}">ABOUT ME</a></li>
            <li class="inline-block mx-5"><a href="{{ url('/home')}}">CONTACT</a></li>
        </ul>
        <h1 class="text-3xl mx-10" style="font-family: Palatino Linotype, serif; margin-right: 180px;">Webshop</h1>
        <div class="row font-hairline">
            @if (Auth::check()) 
                    <p class="inline-block mx-5"><a href="{{ url('/profile')}}">{{ auth()->user()->name }}</a></p>
                    <p class="inline-block mx-5"><a href="{{ url('/logout')}}">Logout</a></p>
                    <p class="inline-block mx-5"><a href="{{ url('/cart')}}">Cart</a></p>
                @else
                    <a class="text-black no-underline hover:underline my-auto" href="{{ url('/login')}}">Login</a>
                    <a class="text-black no-underline hover:underline my-auto" href="{{ url('/register')}}">Register</a>
            @endif
        </div>
    </div>