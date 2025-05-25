<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Sanctum;

class LoginController extends Controller
{
    public function login(Request $request) 
    {
        $credentials = $request->only(['email', 'password']);
        // $user = User::whereEmail($credentials['email'])
        //     ->first();
        // if ($user === null || Hash::check($credentials['password'], $user->password) === false) {
        //     return response()->json("Unauthorized", 401);
        // }
        if (Auth::attempt($credentials) === false) {
            return response()->json("Unauthorized", 401);
        }

        $user = Auth::user();
        $token = $user->createToken('token');        
        return response()->json($token->plainTextToken);
    }
}
