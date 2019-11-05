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

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
    <div class="m-auto p-10 flex items-center justify-center">
        <div class="font-hairline">
            <p class="inline"><a class="text-black" href="{{ url('/home')}}">Home</a></p>
            <p class="inline"><a class="text-black" href="{{ url('/shop')}}">Shop</a></p>
        </div>
        <h1 class="text-3xl mx-10" style="font-family: Palatino Linotype, serif;">Webshop</h1>
        <div class="row font-hairline">
            @if (Auth::check()) 
                <div class="">
                    <p class="inline"><a class="text-black" href="{{ url('/profile')}}">{{ auth()->user()->name }}</a></p>
                    <p class="inline"><a class="text-black" href="{{ url('/logout')}}">Logout</a></p>
                    <p class="inline"><a class="text-black" href="{{ url('/cart')}}">Cart</a></p>
                </div>
                @else
                    <a class="text-black no-underline hover:underline my-auto" href="{{ url('/login')}}">Login</a>
                    <a class="text-black no-underline hover:underline my-auto" href="{{ url('/register')}}">Register</a>
            @endif
        </div>
    </div>