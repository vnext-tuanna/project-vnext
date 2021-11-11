<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{

    public function loginSocialPlatform($driver)
    {
        return Socialite::driver("$driver")->redirect();
    }

    public function callbackFromPlatform(Request $request, $driver)
    {
        $user = Socialite::driver("$driver")->user();
        $isUser = User::where('provider_id', $user->id)->first();

        if ($isUser) {
            Auth::login($isUser);
            return view('client.index');
        } else {
            $modal = new User();
            $newDataUser = [
                'name' => $user->name,
                'image' => $user->avatar,
                'email' => $user->email,
                'position_id' => 1,
                'division_id' => 1,
                'follow_id' => 1,
                'role' => 1,
                'provider' => "$driver",
                'provider_id' => "$user->id",
                'password' => Hash::make('12345678'),
            ];

            $modal->fill($newDataUser)->save();
            Auth::login($modal);
            return view('client.index');
        }
    }
}
