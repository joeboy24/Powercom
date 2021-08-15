<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remarks;
use App\Models\Customer;
use App\Models\Personal;
use App\Models\Technical;
use App\Models\Reccomendation;
use Session;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $match = ['del' => 'no'];
        $entrysearch = $request->query('entrysearch');
        if(!empty($entrysearch)){
            $entries = Personal::where($match)->where('name', 'like', '%'.$entrysearch.'%')
            ->orwhere('contact', 'like', '%'.$entrysearch.'%')
            ->orwhere('customer_no', 'like', '%'.$entrysearch.'%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        }else{
            $entries = Personal::where($match)->orderBy('id', 'desc')->paginate(10);
        }

        $pass = [
            'c' => 1,
            'i' => 1,
            'personal' => $entries
        ];
        return view('pages.data_view')->with($pass);

        // $pass = [
        //     'c' => $c,
        //     'i' => $i,
        //     'ITM' => $ITM,
        //     'cats' => $cats,
        //     'items' => $items
        // ];
        // return view('pages.dash.itemsview')->with($pass);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {

            switch ($request->input('store_action')) {

                case 'save_personal':

                    // Save Personal Data
                    $cust_id = Session::get('cust_id');

                    $personal = Personal::firstOrCreate([
                        'user_id' => 1,
                        'customer_no' => $cust_id,
                        'name' => $request->input('name'),
                        'address' => $request->input('address'),
                        'contact' => $request->input('contact'),
                        'business' => $request->input('buss_nature'),
                        'comp_hse' => $request->input('compound_sel'),
                        'proj_cust' => $request->input('proj_cust'),
                        'est_sensor' => $request->input('sensor'),
                        'email' => $request->input('email'),
                        'dig_address' => $request->input('dig_add'),
                        'coords' => $request->input('coords'),
                    ]);

                    $data_search = Personal::where('customer_no', $cust_id)->first();
                    Session::put('cust_id2', $data_search->id);

                    return redirect('/customer')->with('success', 'Pesonal data successfully saved');
    
                break;

                case 'save_customer':

                    // Save Customer Data
                    $cust_id2 = Session::get('cust_id2');

                    $service_type = $request->input('service_type');
                    if($service_type == '-- Choose Type --'){
                        return redirect(url()->previous())->with('error', 'Choose Type of Service');
                    }

                    $customer = Customer::firstOrCreate([
                        'user_id' => 1,
                        'personal_id' => $cust_id2,
                        'acc_no' => $request->input('acc_no'),
                        'spn' => $request->input('spn'),
                        'geocode' => $request->input('geocode'),
                        'structure_id' => $request->input('structure_id'),
                        'service_type' => $service_type,
                    ]);

                    return redirect('/technical')->with('success', 'Customer data successfully saved');
    
                break;
        
                case 'save_tech':

                    // Save Technical Data
                    $cust_id2 = Session::get('cust_id2');

                    $credit_meter = $request->input('credit_meter');
                    $prepaid_meter = $request->input('prepaid_meter');
                    $gmt = $request->input('gmt');
                    $pmt = $request->input('pmt');
                    if($credit_meter == '-- Choose Yes/No --' || $prepaid_meter == '-- Choose Yes/No --' || $gmt == '-- Choose Yes/No --' || $pmt == '-- Choose Yes/No --'){
                        return redirect(url()->previous())->with('error', 'Choose Yes/No for the select option fields');
                    }

                    $tech = Technical::firstOrCreate([
                        'user_id' => 1,
                        'personal_id' => $cust_id2,
                        'meter_no' => $request->input('meter_no'),
                        'meter_rating' => $request->input('meter_rating'),
                        'ph' => $request->input('ph'),
                        'meter_loc' => $request->input('meter_loc'),
                        'credit_meter' => $credit_meter,
                        'prepaid_meter' => $prepaid_meter,
                        'type' => $request->input('type'),
                        'meter_reading' => $request->input('meter_reading'),
                        'meter_bal' => $request->input('meter_bal'),
                        'pole_dist' => $request->input('pole_dist'),
                        'size' => $request->input('size'),
                        'pole_no' => $request->input('pole_no'),
                        'trans_no' => $request->input('trans_no'),
                        'trans_rate' => $request->input('trans_rate'),
                        'lines_per_pole' => $request->input('lines_per_pole'),
                        'no_of_poles' => $request->input('no_of_poles'),
                        'line_condition' => $request->input('line_condition'),
                        'damage_length' => $request->input('damage_length'),
                        'gmt' => $request->input('gmt'),
                        'pmt' => $request->input('pmt'),
                        'cwa' => $request->input('cwa'),
                        'height' => $request->input('height'),
                        'pole_condition' => $request->input('pole_condition'),
                        'meter_phase_inst' => $request->input('meter_phase_inst'),
                    ]);

                    return redirect('/recc')->with('success', 'Technical data successfully saved');
    
                break;

                case 'save_recc':

                    // Save Reccomendation Data
                    $cust_id2 = Session::get('cust_id2');

                    $recc = Reccomendation::firstOrCreate([
                        'user_id' => 1,
                        'personal_id' => $cust_id2,
                        'rate_to_install' => $request->input('rate_to_install'),
                        'extra_cable_needed' => $request->input('extra_cable_needed'),
                        'date_of_visit' => $request->input('date_of_visit'),
                        'inspected_by' => $request->input('inspected_by'),
                    ]);

                    return redirect('/remarks')->with('success', 'Reccomendation successfully saved');
    
                break;
        
                case 'save_remarks':

                    // Save Remarks Data
                    $cust_id2 = Session::get('cust_id2');

                    $approved_status = $request->input('approved_status');
                    if($approved_status == '-- Choose Yes/No --'){
                        return redirect(url()->previous())->with('error', 'Approve with Yes/No to proceed');
                    }

                    $remarks = Remarks::firstOrCreate([
                        'user_id' => 1,
                        'personal_id' => $cust_id2,
                        'approved_status' => $approved_status,
                        'no_reason' => $request->input('no_reason'),
                        'date_approved' => $request->input('date_approved'),
                        'auth_by' => $request->input('auth_by'),
                        // 'status' => 'complete',
                    ]);

                    $p = Personal::find($cust_id2);
                    $p->status = 'yes';
                    $p->save();

                    return view('pages.entry_success')->with('success', 'Remarks successfully saved');
    
                break;
        


            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return Session::get('cust_id2');
        $personal = Personal::find($id);
        $customer = Customer::where('personal_id', $id)->first();
        $tech = Technical::where('personal_id', $id)->first();
        $recc = Reccomendation::where('personal_id', $id)->first();
        $remarks = Remarks::where('personal_id', $id)->first();
        $pass = [
            'personal' => $personal,
            'customer' => $customer,
            'tech' => $tech,
            'recc' => $recc,
            'remarks' => $remarks
        ];
        return view('pages.data_edit')->with($pass);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $p = Personal::find($id);
        $p->name = $request->input('name');
        $p->address = $request->input('address');
        $p->contact = $request->input('contact');
        $p->business = $request->input('buss_nature');
        $p->comp_hse = $request->input('compound_sel');
        $p->proj_cust = $request->input('proj_cust');
        $p->est_sensor = $request->input('sensor');
        $p->email = $request->input('email');
        $p->dig_address = $request->input('dig_add');
        $p->coords = $request->input('coords');
        $p->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        switch ($request->input('store_action')) {

            case 'update_personal':

                // Update Personal Data

                $p = Personal::find($id);
                $p->name = $request->input('name');
                $p->address = $request->input('address');
                $p->contact = $request->input('contact');
                $p->business = $request->input('buss_nature');
                $p->comp_hse = $request->input('compound_sel');
                $p->proj_cust = $request->input('proj_cust');
                $p->est_sensor = $request->input('sensor');
                $p->email = $request->input('email');
                $p->dig_address = $request->input('dig_add');
                $p->coords = $request->input('coords');
                $p->save();

                return redirect(url()->previous())->with('success', 'Pesonal Data Updated');

            break;

            case 'update_customer':

                // Update Customer Data

                $c = Customer::where('personal_id',$id)->first();
                $c->acc_no = $request->input('acc_no');
                $c->spn = $request->input('spn');
                $c->geocode = $request->input('geocode');
                $c->structure_id = $request->input('structure_id');
                $c->service_type = $request->input('service_type');
                $c->save();

                return redirect(url()->previous())->with('success', 'Customer Data Updated');

            break;
    
            case 'update_tech':

                // Update Technical Data

                $credit_meter = $request->input('credit_meter');
                $prepaid_meter = $request->input('prepaid_meter');
                $gmt = $request->input('gmt');
                $pmt = $request->input('pmt');
                if($credit_meter == '-- Choose Yes/No --' || $prepaid_meter == '-- Choose Yes/No --' || $gmt == '-- Choose Yes/No --' || $pmt == '-- Choose Yes/No --'){
                    return redirect(url()->previous())->with('error', 'Choose Yes/No for the select option fields');
                }

                $t = Technical::where('personal_id',$id)->first();
                $t->meter_no = $request->input('meter_no');
                $t->meter_rating = $request->input('meter_rating');
                $t->ph = $request->input('ph');
                $t->meter_loc = $request->input('meter_loc');
                $t->credit_meter = $credit_meter;
                $t->prepaid_meter = $prepaid_meter;
                $t->type = $request->input('type');
                $t->meter_reading = $request->input('meter_reading');
                $t->meter_bal = $request->input('meter_bal');
                $t->pole_dist = $request->input('pole_dist');
                $t->size = $request->input('size');
                $t->pole_no = $request->input('pole_no');
                $t->trans_no = $request->input('trans_no');
                $t->trans_rate = $request->input('trans_rate');
                $t->lines_per_pole = $request->input('lines_per_pole');
                $t->no_of_poles = $request->input('no_of_poles');
                $t->line_condition = $request->input('line_condition');
                $t->damage_length = $request->input('damage_length');
                $t->gmt = $request->input('gmt');
                $t->pmt = $request->input('pmt');
                $t->cwa = $request->input('cwa');
                $t->height = $request->input('height');
                $t->pole_condition = $request->input('pole_condition');
                $t->meter_phase_inst = $request->input('meter_phase_inst');
                $t->save();

                return redirect(url()->previous())->with('success', 'Technical Data Updated');

            break;

            case 'update_recc':

                // Update Reccomendation Data

                $r = Reccomendation::where('personal_id',$id)->first();
                $r->rate_to_install = $request->input('rate_to_install');
                $r->extra_cable_needed = $request->input('extra_cable_needed');
                $r->date_of_visit = $request->input('date_of_visit');
                $r->inspected_by = $request->input('inspected_by');
                $r->save();

                return redirect(url()->previous())->with('success', 'Reccomendation Data Updated');

            break;
    
            case 'update_remarks':

                // Save Remarks Data

                $approved_status = $request->input('approved_status');
                if($approved_status == '-- Choose Yes/No --'){
                    return redirect(url()->previous())->with('error', 'Approve with Yes/No to proceed');
                }

                $r = Remarks::where('personal_id',$id)->first();
                $r->approved_status = $approved_status;
                $r->no_reason = $request->input('no_reason');
                $r->date_approved = $request->input('date_approved');
                $r->auth_by = $request->input('auth_by');
                // $r->status = 'complete';
                $r->save();

                $p = Personal::find($id);
                $p->status = 'complete';
                $p->save();

                return redirect(url()->previous())->with('success', 'Remarks Data Updated');

            break;
    


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
