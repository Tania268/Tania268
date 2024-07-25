@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="text-2xl font-bold text-[#2c5f7e] mb-4 text-center">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email"
                                class="block text-[#2c5f7e] font-medium mb-1">{{ __('Email Address') }}</label>
                            <input id="email" type="email"
                                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:border-[#ff9000] @error('email') border-red-500 @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-[#2c5f7e] font-medium mb-1">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:border-[#ff9000] @error('password') border-red-500 @enderror"
                                name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center">
                                <input
                                    class="form-check-input h-4 w-4 text-[#ff9000] border-gray-300 rounded focus:ring-[#ff9000]"
                                    type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="ml-2 text-[#2c5f7e] font-medium"
                                    for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <button type="submit"
                                class="w-full bg-[#ff9000] text-white font-bold py-2 rounded-lg hover:bg-[#e68900] focus:outline-none">
                                {{ __('Login') }}
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center mb-4">
                                <a class="text-[#2c5f7e] hover:text-[#ff9000] font-medium"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif

                        <div class="text-center mb-4">
                            <a href="{{ route('auth.google') }}">
                                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                                    alt="Sign in with Google">
                            </a>
                        </div>

                        <div class="text-center">
                            <p class="text-[#2c5f7e]">Don't have an account? <a href="{{ route('register') }}"
                                    class="font-medium text-[#ff9000] hover:text-[#e68900]">Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
