<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|string|max:255|unique:users',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:4',
        ]);
    
        $user = User::create([
            'email' => $validatedData['email'],
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
        ]);


        return response()->json(['massage' => "User create Success"],201);
    }


    public function login()
    {
        $validatedData = request()->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:4',
        ]);

        $cek = request(['email', 'password']);

        if(!$token = auth()->attempt($cek)){
            return response()->json(['error', 'LOGIN GAGAL'], 401);
        }

        return $this->respondWithToken($token);
        }
        
        protected function respondWithToken($token)
        {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 43200
        ]);
    }

    public function me()
    {
        $user = auth()->user();

        if ($user) {
            return response()->json($user);
        }
    
        return response()->json(['message' => 'Unauthorized'], 401);
    }
      

    public function logout()
    {
        $cookie = Cookie::forget('jwt');
        return response(['massage' => 'Success'])->withCookie($cookie);
    }
}
