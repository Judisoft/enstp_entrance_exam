<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportUsers;
use App\Imports\ImportUsers;
use Maatwebsite\Excel\Facades\Excel;

class Import_Export_Controller extends Controller
{
     public function importExport()
    {
       return view('import');
    }

    public function export($program) 
    {
        // return Excel::download(new ExportUsers, 'entrance_exams_list.xlsx');
        return $program;
    }

    public function import() 
    {
        Excel::import(new ImportUsers, request()->file('file'));
            
        return back();
    }
}