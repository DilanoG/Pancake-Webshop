@include('layouts/header')

<div class="flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-4 lg:px-8">
    <div class="max-w-md w-full space-y-2">
        <div>
            <h2 class=" text-center text-3xl font-bold text-gray-900">
                Sign in to your account
            </h2>
            <p class="text-center text-sm text-gray-600">
                Or
                <a href="{{ url('register') }}" class="font-medium text-black hover:text-black">
                    Register here
                </a>
            </p>
        </div>
        <form class="mt-8 space-y-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <input id="email" type="email" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-black focus:border-black focus:z-10 sm:text-sm form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email address">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif
            </div>

            <div class="rounded-md shadow-sm -space-y-px">
                <input id="password" type="password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-black focus:border-black focus:z-10 sm:text-sm form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autofocus placeholder="Password">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-black focus:ring-black border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                        Remember me
                    </label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-black hover:text-black">
                        Forgot your password?
                    </a>
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-black hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                    Sign in
                </button>
            </div>
        <form>
    </div>
</div>           

