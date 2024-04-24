{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
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
            <a href="{{ route('login')}}" class="bg-[#00AFE7] text-white px-5 py-3 rounded-lg sm:p-5 text-lg">Login</a>
        </nav>
        <div class="container mx-auto mt-20 p-5 lg:px-96 lg:pt-52 lg:pb-80 lg:mt-0">
            <div class="bg-white px-8 pb-8 border rounded-2xl border-[#616161] drop-shadow">
                <h1 class="font-bold text-4xl mb-4 pt-4">Register</h1>
                <form method="POST" action="{{ route('register') }}">
                    <div class="mb-3.5">
                        <label class="block text-gray-700 mb-1 text-lg">Username</label>
                        <input type="text" class="form-input w-full border border-gray-300 rounded-md p-2 drop-shadow" required> 
                    </div>
                    <div class="mb-3.5">
                        <label for="email" class="block text-gray-700 mb-1 text-lg">Email</label>
                        <input type="email" class="form-input w-full border border-gray-300 rounded-md p-2 drop-shadow" required> 
                    </div>
                    <div class="mb-3.5">
                        <label for="password" class="block text-gray-700 mb-1 text-lg">Password</label>
                        <input type="password" class="form-input w-full border border-gray-300 rounded-md p-2 drop-shadow" required> 
                    </div>
                    <div class="mb-3.5">
                        <label for="password" class="block text-gray-700 mb-1 text-lg">Re type password</label>
                        <input type="password" class="form-input w-full border border-gray-300 rounded-md p-2 drop-shadow" required> 
                    </div>
                    <button type="submit" class="rounded-lg bg-[#00AFE7] text-white px-4 py-2">
                        <p class="text-lg px-3 py-1">Submit</p>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Now: Thu, 28 Maret 2024
        let date = new Date();
        
        const dateContainer = document.querySelector("#dateContainer");

        let day
        switch(date.getDay()){
            case 0: 
                day = "Minggu"
                break
            case 1:
                day = "Senin"
                break
            case 2:
                day = "Selasa"
                break
            case 3:
                day = "Rabu"
                break
            case 4:
                day = "Kamis"
                break
            case 5:
                day = "Jumat"
                break
            case 6:
                day = "Sabtu"
                break                    
        }

        let month
        switch(date.getMonth()){
            case 0:
                month = "Januari"
                break
            case 1:
                month = "Februari"
                break
            case 2:
                month = "Maret"
                break
            case 3:
                month = "April"
                break  
            case 4:
                month = "Mei"
                break
            case 5:
                month = "Juni"
                break
            case 6:
                month = "Juli"
                break
            case 7:
                month = "Agustus"
                break
            case 8:
                month = "September"
                break
            case 9:
                month = "Oktober"
                break
            case 10:
                month = "November"
                break
            case 11:
                month = "Desember"         
                break                                 
        }

        let dateString = "Now: " + day + ", " + date.getDate() + " " + month + " " + date.getFullYear();
        dateContainer.innerHTML = dateString;

    </script>
@endsection