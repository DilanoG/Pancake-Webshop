<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .dropbtn {
        padding: 4px;
        cursor: pointer;
        }

        .dropbtn:focus {
            outline: none;
        }

        .dropdown {
        float: right;
        position: relative;
        display: inline-block;
        }

        svg {
            pointer-events: none;
        }     

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        width: 120px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        right: 0;
        z-index: 1;
        margin-top: 30px;
        }

        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .show {
            display: block;
        }
    </style>
</head>
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" width="20" height="20" viewBox="0 0 20 20">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 mr-4" href="{{ url('/')}}">Shop</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2" href="{{ url('/')}}">About</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl pr-6" href="{{ url('/home')}}">
                    WEBSHOP
                </a>
            </div>

            @if (Auth::check()) 
                <div class="order-2 md:order-3 flex items-center" id="nav-content">
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn inline-block no-underline hover:text-black">
                            <div id="myDropdown" class="dropdown-content origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                                <a class="block px-4 py-2 text-sm bg-gray-100 text-gray-700 hover:bg-gray-200 hover:text-gray-900" href="{{ url('/profile')}}">Account</a>
                                <a class="block px-4 py-2 text-sm bg-gray-100 text-gray-700 hover:bg-gray-200 hover:text-gray-900" href="{{ url('/admin')}}">Admin Panel</a>
                                <a class="block px-4 py-2 text-sm bg-gray-100 text-gray-700 hover:bg-gray-200 hover:text-gray-900" href="{{ url('/order')}}">Orders</a>
                                <a class="block px-4 py-2 text-sm bg-gray-100 text-gray-700 hover:bg-gray-200 hover:text-gray-900" href="{{ url('/logout')}}">Sign Out</a> 
                            </div>
                            <svg class="fill-current hover:text-black" width="24" height="24" viewBox="0 0 24 24">
                            <circle fill="none" cx="12" cy="7" r="3" />
                            <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                            </svg>
                        </button>
                    </div>
                    <a class="inline-block no-underline hover:text-black ml-4" href="{{ url('/cart')}}">
                        <svg class="fill-current hover:text-black" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                            <circle cx="10.5" cy="18.5" r="1.5" />
                            <circle cx="17.5" cy="18.5" r="1.5" />
                        </svg>
                    </a>
                </div>
                @else
                <div class="order-2 md:order-3 flex items-center" id="nav-content">
                    <a class="inline-block no-underline hover:text-black" href="{{ url('/login')}}">
                        <svg class="fill-current hover:text-black" width="24" height="24" viewBox="0 0 24 24">
                            <circle fill="none" cx="12" cy="7" r="3" />
                            <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                        </svg>
                    </a>

                    <a class="inline-block no-underline hover:text-black ml-4" href="#">
                        <svg class="fill-current hover:text-black" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                            <circle cx="10.5" cy="18.5" r="1.5" />
                            <circle cx="17.5" cy="18.5" r="1.5" />
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </nav>
<script>
    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
        }
    }
    }
</script>
    