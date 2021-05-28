<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SocialProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToProvider($driver) {
        $drivers = ['facebook', 'google'];
        if(in_array($driver, $drivers)) {
            return Socialite::driver($driver)->redirect();
        } else {
            return redirect()->route('login')
                            ->with('info', $driver . ' no es una aplicación válida para poder acceder');
        }

    }

    public function handleProviderCallback(Request $request, $driver) {
        if($request->get('error')) {
            return redirect()->route('login');
        }

        $userSocialite = Socialite::driver($driver)->user();

        $social_profile = SocialProfile::where('social_id', $userSocialite->getId())
                                        ->where('social_name', $driver)
                                        ->first();
        if($social_profile) {

            $user = User::where('email', $userSocialite->getEmail())->first();
            if(!$user) {
            $user = User::create([
                'name'      => $userSocialite->getName(),
                'email'     => $userSocialite->getEmail(),
            ]);
        }
            SocialProfile::create([
                'user_id'       => $user->id,
                'social_id'     => $userSocialite->getId(),
                'social_name'   => $driver,
                'social_avatar' => $userSocialite->getAvatar(),
            ]);
        }

        auth()->login($social_profile->user);
        return redirect()->route('tarjetaPresentacion');

    }
}
