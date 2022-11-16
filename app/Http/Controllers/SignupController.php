<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
class SignupController extends Controller
{
    public function register(Request $request)
    {

        $this->validate($request, [
            'email'   => 'required|email',
            'password'=> 'required',
            'mobile' => 'required|min:10|numeric',
            'captcha' => 'required|captcha',
        ]);
        if (captcha_check($request->captcha) == false ) {
            return response()->json(['success' => false]);       
        }
        $user_validate = User::where('email', $request->email)->first();
        if($user_validate)
        {
            return response()->json(['success' => 400]);
        }
        else
        {
            $user = User::where('email', $request->email)->where('social_id', '!=' , null)->first();
            if($user)
            {
               return response()->json(['success' => 0]);
            }
           $register = new User;
           $register->name = $request->name;
           $register->email = $request->email;
           $register->mobile_no = $request->mobile;
           $register->is_admin = 0;
           $register->login_by = 0;        
           $register->save();
           return response()->json(['success' => true]);
       }



   }
}
