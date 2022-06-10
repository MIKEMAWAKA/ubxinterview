<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExcelData;
use App\Imports\ExcelsImport;

use Maatwebsite\Excel\Facades\Excel;



class ExcelhandleController extends Controller
{
    //
    
    public function importExcel(Request $request)  {

        Excel::import(new ExcelsImport, $request->filexcele);
        return redirect()->back()->with('success', 'User Imported Successfully');

    }

    public function getdata(){

        $data = ExcelData::all();

        return view('datatable', ['data'=>$data]);

    }

    
}
