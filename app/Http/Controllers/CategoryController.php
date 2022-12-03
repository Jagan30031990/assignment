<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {

       $Category = new Category;
       $Category->category_name = $request->category;     
       $Category->save();
       return response()->json(['success' => true]);
   }
  
}
