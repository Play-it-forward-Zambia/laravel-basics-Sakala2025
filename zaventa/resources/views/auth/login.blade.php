<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaventa Login</title>
    <link rel="stylesheet" href="/css/auth.css">
</head>
<body>
<div class="auth-container">
    <div class="auth-title">Welcome Back</div>
    <div class="auth-subtitle">Manage your business with Zaventa</div>
    @if (session('status'))
        <div class="error-message">{{ session('status') }}</div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group">
            <label for="email" class="input-label">Email</label>
            <input id="email" class="input-field" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @if ($errors->has('email'))
                <div class="error-message">{{ $errors->first('email') }}</div>
            @endif
        </div>
        <div class="input-group">
            <label for="password" class="input-label">Password</label>
            <div style="position:relative;">
                <input id="password" class="input-field" type="password" name="password" required autocomplete="current-password">
                <button type="button" class="toggle-password auth-link" data-target="password" style="position:absolute;top:8px;right:10px;background:none;border:none;cursor:pointer;">Show</button>
            </div>
            @if ($errors->has('password'))
                <div class="error-message">{{ $errors->first('password') }}</div>
            @endif
        </div>
        <div class="input-group" style="display:flex;align-items:center;justify-content:space-between;">
            <label for="remember_me" style="display:flex;align-items:center;color:#64748b;font-weight:500;">
                <input id="remember_me" type="checkbox" name="remember" style="margin-right:8px;cursor:pointer;"> Keep me logged in
            </label>
            @if (Route::has('password.request'))
                <a class="auth-link" href="{{ route('password.request') }}">Forgot password?</a>
            @endif
        </div>
        <button class="auth-btn" type="submit">Sign In</button>
    </form>
    <div style="margin-top:2rem;padding-top:2rem;border-top:2px solid #e2e8f0;text-align:center;">
        <span style="color:#64748b;font-size:0.95rem;">New to Zaventa?</span>
        <a class="auth-link" href="{{ route('register') }}" style="font-size:1rem;margin-left:0.4rem;">Create Business Account</a>
    </div>
    </div>
    <script src="/js/auth.js"></script>
</body>
</html>

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
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
