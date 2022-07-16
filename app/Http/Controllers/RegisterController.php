<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
            'status' => '200',
            'messsage' => 'User Register Successfully'
        ]);
    }
}
