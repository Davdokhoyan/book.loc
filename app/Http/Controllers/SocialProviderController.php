<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialProviderController extends Controller
{
    public function provider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function providerHandle($driver)
    {
        $provider_user = Socialite::driver($driver)->user();
        $data = [
            "name" => $provider_user->name?? $provider_user->nickname,
            "password" => password_hash('password', PASSWORD_DEFAULT),
        ];
       $user = User::firstOrCreate(
           [
               'email' => $provider_user->email
           ],
           $data);
       Auth::login($user, true);
       return redirect('/dashboard');
    }
}
