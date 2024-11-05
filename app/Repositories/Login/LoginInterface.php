<?php

namespace App\Repositories\Login;

interface LoginInterface 
{
    public function attemptLogin(array $credentials, string $loginName);
    public function getUserProfile();
    public function logoutUser();
}
