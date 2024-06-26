<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SoftwareHousesImport;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        Excel::import(new SoftwareHousesImport, $request->file('file'));

        return redirect()->back()->with('success', 'CSV Imported Successfully');
    }
}
