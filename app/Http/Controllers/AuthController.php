<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class AuthController extends Controller
{
    public function login(){


    }

    public function register(){
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
        ]);

        $token = $user->createToken('Laravel Token');
        return response()->json([
            'message' => 'Register Success!',
            'token' => $token
        ]);
    }
}
