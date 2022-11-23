<?php

namespace App\Http\Controllers;
use App\Models\ExportIndia;
use App\Models\HSCode;
use Session;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function serach_data(Request $request)
    {
        $data_search_value = Session::get('words_key');
           DB::enableQueryLog();
        $data = ExportIndia::query();
        if(is_numeric($data_search_value))
        {          
         $data->where('hs_code', $data_search_value);

         if(!is_null($request->export_type)) {
           $data = $request->export_type;
           foreach($data as $get_data)
           {
            $data->where("consignment_type", $get_data);
        }

    }

    if (!is_null($request->country_select)) {
        $data = $request->country_select;
        foreach($data as $get_data)
        {
         $data->where("country", $get_data);
     }

 }

 if (!is_null($request->hs_code)) {     
  $data = $request->hs_code;
  foreach($data as $get_data)
  {
    $data->where("hs_code", $request->get_data);
}
}
if (!is_null($request->year)) {
  $data = $request->year;
  foreach($data as $get_data)
  {
    $data->where("consignment_period", $data);
}
}
}else
{
    
    $data->where('product_description','LIKE',$data_search_value.'%');

    if(!is_null($request->export_type)) {
       $get_data = $request->export_type;
       foreach($get_data as $get_data)
       {
        $data->where("consignment_type", $get_data);
    }

}

if (!is_null($request->country_select)) {
    $get_data = $request->country_select;
    foreach($get_data as $get_data)
    {
     $data->where("country", $get_data);
 }

}

if (!is_null($request->hs_code)) {     
  $get_data = $request->hs_code;
  foreach($get_data as $get_data)
  {
    $data->where("hs_code", $request->get_data);
}
}
if (!is_null($request->year)) {
  $get_data = $request->year;
  foreach($get_data as $get_data)
  {
    $data->where("consignment_period", $get_data);
}

}   
 dd(DB::getQueryLog()); 
return $data->get();  

return response()->json($data); 
}
}
}
