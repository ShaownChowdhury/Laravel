<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    function googleLogin(){
        return Socialite::driver('google')->redirect();
    }

    function googleVerify(){
        $user = Socialite::driver('google')->stateless()->user();

        $customer = Customer::updateOrCreate(
            [
            'email' => $user->email,
            ],
            [
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make($user->id . uniqid()),
            'profile_image' => $user->avatar ?? null
            ]
        );
        Auth::guard('customer')->login($customer);
        return redirect('/my-profile');
    }


    function facebookLogin(){
        return Socialite::driver('facebook')->redirect();
    }

    function facebookVerify(){
        $user = Socialite::driver('facebook')->user();
        dd($user);

        $customer = Customer::updateOrCreate(
            [
            'email' => $user->email,
            ],
            [
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make($user->id . uniqid()),
            'profile_image' => $user->avatar ?? null
            ]
        );
        Auth::guard('customer')->login($customer);
        return redirect('/my-profile');
    }
}
