<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ExportIndia;
class ExportIndiaController extends Controller
{
    public function index()
    {

    }

    public function show()
    {   
        $export_india = ExportIndia::paginate(50);  
        return view('index', compact('export_india'));

    }
}
