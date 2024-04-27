{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends("layouts.base")
@section("content")
    <div class="container mx-auto">
        <nav class="bg-white flex md:justify-between justify-center items-center mt-11 md:flex-row flex-col md:p-5">
            <div class="sm:mb-0 mb-4">
                <h1 class="text-4xl font-bold md:text-start text-center">To-do List</h1>
                <h2 class="text-lg md:text-start text-center">By Gerda SOWULO</h2>    
            </div>    
            <p id="dateContainer" class="md:mr-4 mr-0 sm:p-5 text-lg text-center sm:mb-0 mb-4">Now: Thu, 28 Maret 2024</p>
            
            <a href="{{ route('register')}}" class="bg-[#00AFE7] text-white px-5 py-3 rounded-lg sm:p-5 text-lg">Register</a>
        </nav>
        <div class="container mx-auto mt-20 p-5 lg:px-96 lg:pt-52 lg:pb-80 lg:mt-0">
            <div class="bg-white px-8 py-4 border-2 rounded-2xl border-[#616161] drop-shadow">
                <h1 class="font-bold text-4xl mb-4">Login</h1>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3.5">
                        <label for="email" class="block text-gray-700 mb-1 text-lg">Email</label>
                        <input type="email" class="form-input w-full border border-gray-300 rounded-md p-2 drop-shadow" name="email" required> 
                    </div>
                    <div class="mb-3.5">
                        <label for="password" class="block text-gray-700 mb-1 text-lg">Password</label>
                        <input type="password" class="form-input w-full border border-gray-300 rounded-md p-2 drop-shadow" name="password" required> 
                    </div>
                    <div>
                        <button type="submit" class="rounded-lg bg-[#00AFE7] text-white px-5 py-3">
                            <p class="text-lg px-3 py-1">Submit</p>
                        </button>
                        <button type="submit" class="rounded-lg px-5 py-3">
                            <p class="text-[#00AFE7] text-lg px-3 py-1">Forgot password?</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('components.dateLogic')
@endsection