<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <title>Palitanan Marketplace</title>
</head>

<style>
    body {
        background: url('/assets/images/homepage_background.png') no-repeat center center fixed;
        background-size: cover;
    }
</style>

<body>
    
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 flex items-center justify-center " style="float:right; margin-top: 150px; margin-right:100px;">
    
        <x-slot name="logo">
                </x-slot>
        
                <x-validation-errors class="mb-4" />
        
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
        
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h5 class="text-xl m-4 font-medium text-gray-900 dark:text-white">Sign in to our platform</h5>

                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
        
                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        
                        

                        <x-button class="ms-4">
                            {{ __('Log in') }}
                        </x-button>


                        
                    </div>

                    <div class="text-sm font-medium m-4 text-gray-500 dark:text-gray-300">
                        Not registered? <a href="{{ route ('register')}}" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                    </div>
                </form>

        
    
    </div>
   



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>

</html>
