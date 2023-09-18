<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginWithSocialsController extends Controller
{

    public function redirect($provider) {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider) {

        try {
            $socialUser = Socialite::driver($provider)->user();

            if($socialUser->email == null){
                return redirect('/login')->withErrors(['socialEmailError' => 'Rendi pubblica l\'email di '. $provider .' per continuare']);
            }

            $user = User::where('email', $socialUser->email)->first();

            if($user){
                $user->update([
                    $provider.'_id' => $socialUser->id,
                ]);
            }

            $user = User::where($provider.'_id', $socialUser->id)->first();
            if(!$user){
                $user = User::create([
                    $provider.'_id' => $socialUser->id,
                    'name' => $socialUser->name == null ? $socialUser->nickname : $socialUser->name,
                    'email' => $socialUser->email,
                    'password' => Hash::make(Str::random(20)),
                ]);
            }

            Auth::login($user);

            return redirect()->route('homepage');

        } catch (\Throwable $th) {
            return redirect('/login');
        }
    }
}
