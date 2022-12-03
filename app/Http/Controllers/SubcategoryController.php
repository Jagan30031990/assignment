<?php

namespace App\Http\Controllers;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function store(Request $request)
    {
       $Subcategory = new Subcategory;
       $Subcategory->sub_category_name = $request->sub_category;     
       $Subcategory->category_id = $request->category_id;     
       $Subcategory->save();
       return response()->json(['success' => true]);
    }
}
