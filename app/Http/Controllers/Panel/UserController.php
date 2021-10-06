<?php

namespace App\Http\Controllers\Panel;

use App\Models\User;
use App\Providers\BaseController;
use App\Providers\QueryBuilder;

class UserController extends BaseController { 

    public function index()
    {
        $users = User::all(['id', 'first_name', 'last_name', 'username']);
        dd($users);
        if($users)
        return response([
            'state' => true,
            'message' => 'success',
            'data' => $users
        ], 200);
    }

    public function create()
    {
        $user = new User();
        $user->first_name = $this->request->input('first_name');
        $user->last_name = $this->request->input('last_name');
        $user->username = $this->request->input('username');
        if($user->save())
            return response([
            'state' => true,
                'message' => 'success',
            'data' => null
            ], 200);
    }

public function show(){}

public function edit(){}

public function update(){}

public function delete(){}
}