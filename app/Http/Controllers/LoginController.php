<?php
namespace App\Http\Controllers;

use Auth;
use DB;
use Captcha;
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
        // print_r($request->search);
        // // die();
        // $search_data = json_decode($request->get('search_data'));        
        // if ($search_data == NULL || $search_data=='') {
        //     if ($request->ajax()) {
        //         $customers = ExportIndia::limit(2000)->get();
        //         return datatables()->of($customers)->toJson();
        //     }
        // } else {
        //     if ($request->ajax()) {
        //         $customers = ExportIndia::where("product_description", "LIKE", "%{$search_data}%")->get();
        //         return datatables()->of($customers)->toJson();
        //     }
        // }
        // $exported_data = ExportIndia::take(23)->paginate(2);
        $exported_data = DB::table(function ($query) {
            $query->selectRaw('*')
            ->from('mst_export_india')
            ->orderBy('id','asc')
            ->take(2000);
        })->paginate(100);
        $exported_data_count = DB::table(function ($query) {
            $query->selectRaw('*')
            ->from('mst_export_india')
            ->orderBy('id','asc')
            ->take(2000);
        });
        $count_of_data = ExportIndia::count();
        return view('index', compact('count_of_data','exported_data','exported_data_count'));
    }
    public function autocomplete(Request $request)
    {
        $datas = HSCode::select('product_name','hs_code')
        ->where('product_name','LIKE',$request->input('query').'%')->take(10)->get();      
        $dataModified = array();
       
            foreach ($datas as $data)
            {
             $dataModified[] = $data->product_name.'('.$data->hs_code.')';
         }        

     return response()->json($dataModified);

 }
 public function filter_data(Request $request)
 {
    $str = strstr($request->search_data, '(');
    $str_m = str_replace( array("(", ")"), '', $str);
    print_r($str_m);
    die();
    $exported_data_count = DB::table(function ($query) {
        $query->selectRaw('*')
        ->from('mst_export_india')
        ->orderBy('id','asc')
        ->take(2000);
    });
    $exported_data = ExportIndia::selectRaw('*')           
    ->where('hs_code', $str_m)
    ->from('mst_export_india')
    ->orderBy('id','asc')
    ->take(2000)->paginate(100);
    $count_of_data = ExportIndia::count();
    return view('index', compact('count_of_data','exported_data','exported_data_count'));
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