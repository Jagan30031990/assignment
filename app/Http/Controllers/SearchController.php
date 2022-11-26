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
    
    $export_type = $request->export_type;
    $country_select = $request->country_select;
    $hs_code = $request->hs_code;
    $year = $request->year; 
    $data_search_value = Session::get('words_key');  
   

    if(is_numeric($data_search_value))
    {
      $query=DB::table('mst_export_india')->where('hs_code', $data_search_value);
      if(!empty($export_type)){      
        $export_type = collect($export_type)
        ->map(fn($i) => trim($i))
        ->all();
        $query->whereIn('consignment_type', $export_type);
      }

      if(!empty($country_select)){      
        $country_select = collect($country_select)
        ->map(fn($i) => trim($i))
        ->all();
        $query->whereIn('country', $country_select);
      }

      if(!empty($hs_code)){      
        $hs_code = collect($hs_code)
        ->map(fn($i) => trim($i))
        ->all();
        $query->whereIn('hs_code', $hs_code);
      }

      if(!empty($year)){      
        $year = collect($year)
        ->map(fn($i) => trim($i))
        ->all();
        $query->whereIn('consignment_period', $year);
      }

    }else{
      $query=DB::table('mst_export_india')->where(function($query) use ($data_search_value)
      {
        foreach ($data_search_value as $term) {
          $query->orWhere('product_description', 'like', '%' . $term . '%');
        }
      });
      if(!empty($export_type)){      
        $export_type = collect($export_type)
        ->map(fn($i) => trim($i))
        ->all();
        $query->whereIn('consignment_type', $export_type);
      }

      if(!empty($country_select)){      
        $country_select = collect($country_select)
        ->map(fn($i) => trim($i))
        ->all();
        $query->whereIn('country', $country_select);
      }

      if(!empty($hs_code)){      
        $hs_code = collect($hs_code)
        ->map(fn($i) => trim($i))
        ->all();
        $query->whereIn('hs_code', $hs_code);
      }

      if(!empty($year)){      
        $year = collect($year)
        ->map(fn($i) => trim($i))
        ->all();
        $query->whereIn('consignment_period', $year);
      }
    }   

    $result = $query->get();
    return response()->json($result);
   
  }
}
