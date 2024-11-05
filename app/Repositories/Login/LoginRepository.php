<?php

namespace App\Repositories\Login;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class LoginRepository implements LoginInterface
{
    public function attemptLogin(array $credentials, string $loginName)
    {
        $key = Str::lower('login-attempts:' . request()->ip());

        // Check if login attempts exceed limit
        if (RateLimiter::tooManyAttempts($key, 5)) {
            return ['error' => 'Too many login attempts. Please try again later.'];
        }

        if (!Auth::attempt([$loginName => $credentials['login'], 'password' => $credentials['password']])) {
            RateLimiter::hit($key);
            return ['error' => 'Unable to login due to invalid credentials.'];
        }

        $user = Auth::user();
        RateLimiter::clear($key);
        return ['user' => $user, 'token' => $user->createToken('My API Token')->plainTextToken];
    }

    public function getUserProfile()
    {
        return Auth::user();
    }

    public function logoutUser()
    {
        Auth::user()->currentAccessToken()->delete();
        return true;
    }
}
