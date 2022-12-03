<?php
namespace App\Http\Controllers;
use Auth;
use DB;
use App\Models\Category;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {

        return view('authentication.sign_in');
    }  
    public function dashboard(Request $request)
    {
        return view('dashboard');
    }
    public function home_page(Request $request)
    {

      $categories  = Category::all();
      return view('index', [
        'categories' => $categories,
    ]);




  }
  public function user_dashboard(Request $request)
  {
    return view('user');
}
public function chklogin(Request $request)
{

    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|alphaNum|min:3'
    ]);

    $user_data = array(
        'email' => $request->get('email'),
        'password' => $request->get('password')
    );

    if (Auth::attempt($user_data) && Auth()->user()->is_admin == 1) {
        Toastr::success('Successfully Login Admin');
        return response()->json(['success' => 'admin']);
    } else if(Auth::attempt($user_data) && Auth()->user()->is_admin == 0){
        Toastr::success('Successfully Login User');
        return response()->json(['success' => 'user']);
    }else {
        return response()->json(['success' => false]);
    }
}

function logout()
{
    Auth::logout();
    return redirect('/');
}

}