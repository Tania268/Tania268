@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-[#ff9900] text-white text-center text-2xl py-4 rounded-t-lg">
                    {{ __('Register') }}
                </div>

                <div class="px-8 py-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-[#2c5f7e] font-bold mb-2">{{ __('Name') }}</label>
                            <input id="name" type="text"
                                class="form-input w-full @error('name') border-red-500 @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email"
                                class="block text-[#2c5f7e] font-bold mb-2">{{ __('Email Address') }}</label>
                            <input id="email" type="email"
                                class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-[#2c5f7e] font-bold mb-2">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                                required autocomplete="new-password">

                            @error('password')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm"
                                class="block text-[#2c5f7e] font-bold mb-2">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-input w-full"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="mb-6">
                            <button type="submit"
                                class="bg-[#2c5f7e] text-white font-bold py-2 px-4 rounded w-full hover:bg-[#ff9900] transition duration-200">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
