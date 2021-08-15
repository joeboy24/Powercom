<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Models\Customer;
use App\Models\Remarks;
use App\Models\Technical;
use App\Models\Reccomendation;
use Session;

class PagesController extends Controller
{
    //
    public function index(){
        // $customer = Customer::all();
        // return $customer;
        return view('pages.index');
    }

    public function personal(){
        // $data_search = Personal::where('customer_id', 'CT4648V12J2')->first();
        // return $data_search->id;
        $xter = substr(str_shuffle(str_repeat("0123456789A1B2C3D4E5F6G7H8I9J0K9L8M7N6O5P4Q3R2S1T2U3V4W5X6Y7Z8", 5)), 0, 5);
        $time = date('is');
        $cust_id = 'CT'.$time.$xter;
        Session::put('cust_id', $cust_id);
        return view('pages.personal_data');
    }

    public function customer(){
        $cust_id2 = Session::get('cust_id2');
        if($cust_id2 == ''){
            return redirect('/');
        }
        return view('pages.customer_data');
    }

    public function technical(){
        $cust_id2 = Session::get('cust_id2');
        if($cust_id2 == ''){
            return redirect('/');
        }
        return view('pages.tech_data');
    }

    public function recc(){
        $cust_id2 = Session::get('cust_id2');
        if($cust_id2 == ''){
            return redirect('/');
        }
        return view('pages.recc');
    }

    public function remarks(){
        $cust_id2 = Session::get('cust_id2');
        if($cust_id2 == ''){
            return redirect('/');
        }
        return view('pages.remarks');
    }

    public function database(){
        $personal = Personal::where('del', 'no')->orderBy('id', 'DESC')->paginate(10);
        $pass = [
            'c' => 1,
            'personal' => $personal
        ];
        return view('pages.data_view')->with($pass);
    }
}
