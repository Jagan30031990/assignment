<?php
namespace App\Http\Controllers;
use Auth;
use DB;
use Captcha;
use DataTables;
use App\Models\ExportIndia;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    { 
        return view('authentication.sign_in');
    }
    public function home_page(Request $request)
    {
    ini_set('memory_limit', '-1');
       if ($request->ajax()) {
            $customers = DB::SELECT("SELECT id,data_type from mst_export_india limit 2000");
            return datatables()->of($customers)
                ->addColumn('action', function ($row) {
                    $html = '<a href="#" class="btn btn-xs btn-secondary btn-edit">Edit</a> ';
                    $html .= '<button data-rowid="' . $row->id . '" class="btn btn-xs btn-danger btn-delete">Del</button>';
                    return $html;
                })->toJson();
        }

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
        return response()->json(['success' => true]);
    }
    else
    {
        return response()->json(['success' => false]);
    }
}
public function morePosts(){
  $export_india = ExportIndia::paginate(50);  
  return response()->json($export_india);
}

public function export_india()
{
    $export_india = ExportIndia::paginate(100);  
    return view('index', compact('export_india'));
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
