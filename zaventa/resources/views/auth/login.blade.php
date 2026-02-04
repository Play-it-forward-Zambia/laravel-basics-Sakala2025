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

