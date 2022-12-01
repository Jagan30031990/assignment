<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Captcha;
use Session;
use Illuminate\Support\Str;
use Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index()
    {
        return view('verification');
    }
    public function get_profile(Request $request)
    {
        $id = Auth::user()->id;
        $user_data = User::where('id',$id)->get();
        return view('webViews.profiles.my_profile',compact('user_data'));
    }

    public function edit_profile(Request $request)
    {
        $id = Auth::user()->id;
        $user_data = User::where('id',$id)->get();
        return view('webViews.profiles.edit_profile',compact('user_data'));
    }
    public function update(Request $request)
    {
        $user_id = $request->user_id;
        $profile = User::find($user_id);
        $profile->name = $request->input('first_name')?$request->name:$profile->name;
        $profile->mobile_no = $request->input('mobile_no')?$request->mobile_no:$profile->mobile_no;
        $profile->sales_executive = $request->input('sales_executive')?$request->sales_executive:$profile->sales_executive;
        $new_name='';       
        $image = $request->file('profile_image');
        if(!empty($image))
        {
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
        }
        
        $profile->profile_image = $new_name?$new_name:$profile->profile_image;

        if($profile->password==$request->currentpassword || $request->input('newpassword')!=null)
        {
            $profile->password = Hash::make($request->input('newpassword'));
        }
        else
        {
            $profile->password = $profile->password;
            
        }
        $profile->company_name = $request->input('company_name')?$request->company_name:$profile->company_name;

        $profile->designation = $request->input('designation')?$request->designation:$profile->designation;   
        if($profile->update())
        {
           return response()->json(['success' => true]);
       }
       else
       {
           return response()->json(['success' => false]);
       }
   }

   public function email_verification(Request $request)
   {
    $token = Str::random(64);  
    $user_id = $request->user_id;
    $user = User::find($user_id);    
    $user->remember_token  = $token; 
    $user->save();
    Mail::send('emailVerificationEmail', ['token' => $token], function($message) use($request){
        $user_data = $request->user_id;
        $user_data = User::where('id',$user_data)->first();
        $message->to($user_data['email']);
        $message->subject('Email Verification Mail');
    });

    return response()->json(['success' => true]);

}
public function verifyAccount($token)
{

    $verifyUser = User::where('remember_token', $token)->first();

    $message = 'Sorry your email cannot be identified.';

    if(!is_null($verifyUser)){
        $user = $verifyUser->user;
        if($verifyUser->is_email_verified==0) {
            $verifyUser->is_email_verified = 1;
            $verifyUser->save();
            $message = "Your e-mail is verified. You can now login.";
        } else {
            $message = "Your e-mail is already verified. You can now login.";
        }
        return redirect('verification_email')->withErrors($message);

    }

}
}
