<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaventa Register</title>
    <link rel="stylesheet" href="/css/auth.css">
</head>
<body>
<div class="auth-container">
    <div class="auth-title">Join Zaventa</div>
    <div class="auth-subtitle">Launch your service business today</div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-group">
            <label for="name" class="input-label">Name</label>
            <input id="name" class="input-field" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
            @if ($errors->has('name'))
                <div class="error-message">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <div class="input-group">
            <label for="email" class="input-label">Email</label>
            <input id="email" class="input-field" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
            @if ($errors->has('email'))
                <div class="error-message">{{ $errors->first('email') }}</div>
            @endif
        </div>
        <div class="input-group">
            <label for="password" class="input-label">Password</label>
            <div style="position:relative;">
                <input id="password" class="input-field" type="password" name="password" required autocomplete="new-password">
                <button type="button" class="toggle-password auth-link" data-target="password" style="position:absolute;top:8px;right:10px;background:none;border:none;cursor:pointer;">Show</button>
            </div>
            @if ($errors->has('password'))
                <div class="error-message">{{ $errors->first('password') }}</div>
            @endif
        </div>
        <div class="input-group">
            <label for="password_confirmation" class="input-label">Confirm Password</label>
            <div style="position:relative;">
                <input id="password_confirmation" class="input-field" type="password" name="password_confirmation" required autocomplete="new-password">
                <button type="button" class="toggle-password auth-link" data-target="password_confirmation" style="position:absolute;top:8px;right:10px;background:none;border:none;cursor:pointer;">Show</button>
            </div>
            @if ($errors->has('password_confirmation'))
                <div class="error-message">{{ $errors->first('password_confirmation') }}</div>
            @endif
        </div>
        <button class="auth-btn" type="submit">Create Account</button>
    </form>
    <div style="margin-top:2rem;padding-top:2rem;border-top:2px solid #e2e8f0;text-align:center;">
        <span style="color:#64748b;font-size:0.95rem;">Already have an account?</span>
        <a class="auth-link" href="{{ route('login') }}" style="font-size:1rem;margin-left:0.4rem;">Sign In</a>
    </div>
    </div>
    <script src="/js/auth.js"></script>
</body>
</html>

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
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
>>>>>>> c0b4aa7d967d4b89e69a70bd9cdda89d6fc6679f
