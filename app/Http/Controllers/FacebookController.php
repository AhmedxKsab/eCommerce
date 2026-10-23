<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;


class FacebookController extends Controller
{
    public function redirect($service)
    {
        return Socialite::driver($service)->stateless()->redirect();
    }

    public function callback($service)
    {
        $user = Socialite::driver($service)->stateless()->user();
        dd($user);
    }
}