<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => request()->get('name'),
            'email' => request()->get('email'),
            'password' => bcrypt(request()->get('password')),
        ]);
   
        return response()->json([
            'status' => 200,
            'data' => $user,
            'messsage' => 'User Registered Successfully'
        ],200);
    }
}
