<?php
namespace App\Http\Controllers;
use Auth;
use DB;
use Captcha;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    { 
        return view('authentication.sign_in');
    }
    public function home_page()
    {
        return view('index');
    }
    public function refresh_captcha()
    {
        
        return response()->json([
            'captcha' => Captcha::img()]);
    }
    public function chklogin(Request $request)
    {

        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            Toastr::success('Successfully Login');
            return redirect('/admin/home-page');
        }
        else
        {
            Toastr::error('Please Provide Valid Credentials');
            return redirect('/');
        }
    }

    function logout()
    {

        Auth::logout();
        return redirect('/');
    }
    public function dashboard(Request $request)
    {
        return view('dashboard');
    }
}
