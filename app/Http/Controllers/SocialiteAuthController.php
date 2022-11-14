<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Socialite;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Exception;

class SocialiteAuthController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Google login authentication
     *
     * @return void
     */
    public function loginWithGoogle()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('social_id', $googleUser->id)->first();            
            if(!empty($user)){
                Auth::login($user);
                Toastr::success('Successfully Login');
                return redirect('/admin/home-page');
            }elseif(empty($user))
            {
                $createUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'social_id' => $googleUser->id,
                    'profile_image' => $googleUser->picture,
                    'login_by' => 1,
                    'is_admin' =>0,
                    'email_verified_at'=>Carbon::now()
                ]);
                Auth::login($createUser);
                Toastr::success('Successfully Login');
                return redirect('/admin/home-page');
            }
            else{
                $user = User::where('email', $googleUser->email)->first();
                if($user->email!==null && $user->social_id==null) 
                {
                    $user->social_id = $googleUser->id;
                    $user->profile_image = $googleUser->picture;                    
                    $user->login_by = 1;
                    $user->save();
                    Toastr::success('Successfully Login');
                    return redirect('/admin/home-page');

                }else{
                    $createUser = User::create([
                        'name' => $googleUser->name,
                        'email' => $googleUser->email,
                        'social_id' => $googleUser->id,
                        'profile_image' => $googleUser->picture,
                        'login_by' => 1,
                        'is_admin' =>0,
                        'email_verified_at'=>Carbon::now()
                    ]);
                    Auth::login($createUser);
                    Toastr::success('Successfully Login');
                    return redirect('/admin/home-page');
                }
                
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}