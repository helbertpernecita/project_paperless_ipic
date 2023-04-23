<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Exception;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $socialUser  = Socialite::driver($provider)->user();

            if(User::where('email',$socialUser->getEmail())->exists()){
                return redirect('/login')->withErrors(['email'=> 'Your email address uses different login method']);
            }
            $user = User::where([
                'provider_name' => $provider,
                'provider_id' => $socialUser->id,
            ])->first();

            if(!$user){
                $password = Str::random(8);
                $user = User::create([
                    'provider_id' => $socialUser->getId(),
                    'provider_name' => $provider,
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'provider_token' => $socialUser->token,
                    'password' => $password
                ]);
                $user->sendEmailVerificationNotification();
            }
        
            Auth::login($user);
        
            return redirect('/login');

        } catch(Exception $e){
            return redirect('/login');
        }
    }
}
