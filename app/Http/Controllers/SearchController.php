<?php

namespace App\Http\Controllers;
use App\Models\ExportIndia;
use App\Models\HSCode;
use Session;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function serach_data(Request $request)
    {
        $data_search_value = Session::get('words_key');
        $data = ExportIndia::query();
        if(is_numeric($data_search_value))
        {          
         $data->where('hs_code', $data_search_value);

         if(!is_null($request->export_type)) {
            $data->where("consignment_type", $request->export_type);
        }

        if (!is_null($request->country_select)) {
            $data = $request->country_select;
        foreach($data as $get_data)
        {
             print_r($get_data);
        }
            $data->where("country", $request->country_select);
        }

        if (!is_null($request->hs_code)) {
         $data->where("hs_code", $request->hs_code);
     }
     if (!is_null($request->year)) {
         $data->where("consignment_period", $request->year);
     }
 }else
 {
    $data->where('product_description','LIKE',$data_search_value.'%');

    if(!is_null($request->export_type)) {
        $data->where("consignment_type", $request->export_type);
    }

    if (!is_null($request->country_select)) {
        $data->where("country", $request->country_select);
    }

    if (!is_null($request->hs_code)) {
     $data->where("hs_code", $request->hs_code);
 }
 if (!is_null($request->year)) {
     $data->where("consignment_period", $request->year);
 }

}     
return $data->get();  
return response()->json($data); 
}
}
