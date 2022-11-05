<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use Input;
use App\Post;
use DB;
use Session;
use Validator;
use App\Expense;

use App\Models\User;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Imports\StdImport;
use Maatwebsite\Excel\Facades\Excel;

class ExportsController extends Controller 
{
    
    public function importFile(){
        return view('pages.uploadtest');
    }


    public function userexport() 
    {
        return Excel::download(new UsersExport, 'Data_export.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {

        try {
            $this->validate($request, [
                'file'   => 'required|max:5000|mimes:xlsx,xls,csv'
            ]);

            Excel::import(new UsersImport,request()->file('file'));
            return redirect('/importfile')->with('success', 'File successfully uploaded');

        } catch (ValidationException $exception) {
            return redirect('/importfile')->with('Error', $exception->errors());
        }

    }
 
    public function importStd(Request $request) 
    {

        // try {
        //     $this->validate($request, [
        //         'file'   => 'required|max:5000|mimes:xlsx,xls,csv'
        //     ]);

        //     Excel::import(new StdImport,request()->file('file'));
        //     return redirect('/addstudent')->with('success', 'File successfully uploaded');

        // } catch (ValidationException $exception) {
        //     return redirect('/addstudent')->with('Error', $exception->errors());
        // }

        switch ($request->input('store_action')) {

            case 'import_std':
                $class = $request->input('imp_std_cls');

                // if ($class != 'Click here to choose class'){
                    try {
                        $this->validate($request, [
                            'import_file'   => 'required|max:5000|mimes:xlsx,xls,csv'
                        ]);
            
                        Excel::import(new StdImport,request()->file('import_file'));
                        return redirect('/addstudent')->with('success', 'File successfully uploaded');
            
                    } catch (ValidationException $exception) {
                        return redirect('/addstudent')->with('error', $exception->errors());
                    }
                // }else{
                //     return redirect('/addstudent')->with('error', 'Oops..! Select Class To Proceed.');
                // }
            break;

        }

    }


    


}