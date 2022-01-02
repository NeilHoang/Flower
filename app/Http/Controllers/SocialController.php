<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('facebook_id', $user->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect(session('link'));
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'password' => encrypt('admin@123')
                ]);

                Auth::login($createUser);
                return redirect(session('link'));
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
