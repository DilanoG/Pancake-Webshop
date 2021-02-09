@include('layouts/header')

<div class="flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-4 lg:px-8">
    <div class="max-w-md w-full space-y-2">
        <div>
            <h2 class=" text-center text-3xl font-bold text-gray-900">
                Register your account
            </h2>
            <p class="text-center text-sm text-gray-600">
                Already have an account?
                <a href="{{ url('login') }}" class="font-medium text-black hover:text-black">
                    Click here!
                </a>
            </p>
        </div>
        <form class="mt-8 space-y-3" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <input id="name" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-black focus:border-black focus:z-10 sm:text-sm form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="rounded-md shadow-sm -space-y-px">
                <input id="email" type="email" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-black focus:border-black focus:z-10 sm:text-sm form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email Address">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="rounded-md shadow-sm -space-y-px">
                <input id="password" type="password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-black focus:border-black focus:z-10 sm:text-sm form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="rounded-md shadow-sm -space-y-px">
                <input id="password-confirm" type="password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-black focus:border-black focus:z-10 sm:text-sm form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="password_confirmation" required placeholder="Confirm Password">
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-black hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                    {{ __('Register') }}
                </button>
            </div>
                      


