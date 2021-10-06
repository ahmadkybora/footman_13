<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Providers\BaseController;

class AuthController extends BaseController{
    public function login()
    {
        $user = User::where([
            ['username', $this->request->input('username')], 
            ['password', $this->request->input('password')],
        ])->firstOrFail();

        var_dump($user);
    }

    public function register(){}

    public function logout(){}
}