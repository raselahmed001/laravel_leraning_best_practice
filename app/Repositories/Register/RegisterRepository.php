<?php

namespace App\Repositories\Register;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterRepository implements RegisterInterface
{
    public function register(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password']),
        ]);
    }
}