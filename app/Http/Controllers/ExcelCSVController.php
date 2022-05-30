<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Exports\tratamientosExport;
 
use App\Imports\tratamientosImport;
 
use Maatwebsite\Excel\Facades\Excel;
 
class ExcelCSVController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
       return view('excel-csv-import');
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExcelCSV(Request $request) 
    {
        $validatedData = $request->validate([
 
           'file' => 'required',
 
        ]);
 
        Excel::import(new tratamientosImport, $request->file('file'));
 
            
        return redirect('excel-csv-file')->with('status', 'Los datos han sido importados correctamente');
    }
 
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportExcelCSV($slug) 
    {
        return Excel::download(new tratamientosExport, 'tratamientos.'.$slug);
    }
    
}