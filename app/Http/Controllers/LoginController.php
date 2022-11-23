<?php
namespace App\Http\Controllers;

use Auth;
use DB;
use Captcha;
use Session;
use DataTables;
use App\Models\ExportIndia;
use App\Models\HSCode;
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

        return view('index');
    }
    public function autocomplete(Request $request)
    {
        $data_check = $request->input('query');
        $dataModified = array();
        if(is_numeric($data_check))
        {
            $datas = HSCode::select('product_name')
            ->where('hs_code', $data_check)->get(); 
            foreach ($datas as $data)
            {
                $dataModified[] = $data->product_name;
            }        
        }
        else
        {
            $datas = HSCode::select('product_name')
            ->where('product_name','LIKE',$request->input('query').'%')->take(10)->get();     
            foreach ($datas as $data)
            {
                $dataModified[] = $data->product_name;
            }        
        }

        return response()->json($dataModified);

    }
    public function filter_data(Request $request)
    {
       $words = $request->search_data;
       session(['words_key' => $words ]);
       if(is_numeric($request->search_data))
       {

        $data = ExportIndia::where('hs_code',$words)->get();
        return response()->json($data);                

    }
    else
    {

        $data = ExportIndia::where('product_description','LIKE',$words.'%')->get();
        return response()->json($data);                
    }

    $count_of_data = ExportIndia::count();
    return view('index', compact('count_of_data'));
}
public function refresh_captcha()
{

    return response()->json([
        'captcha' => Captcha::img()
    ]);
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

    if (Auth::attempt($user_data)) {
        Toastr::success('Successfully Login');
        return response()->json(['success' => true]);
    } else {
        return response()->json(['success' => false]);
    }
}
public function morePosts()
{
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