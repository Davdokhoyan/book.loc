<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|min:2|max:25',
            'email'    => 'required|email|unique:users',
            'password' => ['required', 'confirmed', Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
            ]

        ]);
        $data = [
            'name' => $request->input('name'),
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
//        dd($request->all());
        $user = User::create($data);
        $token = $user->createToken('token');
        Auth::login($user, true);
        return ['token' => $token->plainTextToken];
    }


    public function login(Request $request)
    {

    }
}
