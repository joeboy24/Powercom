<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PivoApps</title>
    <link href="/maindir/css/bootstrap.min.css" rel="stylesheet">
    <link href="/maindir/css/mainstyle.css" rel="stylesheet">
</head>
<body>
    <div class="">
        <div class="col-sm-8 col-sm-offset-2 myCol">

            <div class="col-sm-6 col-sm-offset-3 mycontainer f1f1f1">
                @include('inc.messages')
                <h3 class="pannel_th">Edit Data Here</h3>
                {{-- <a>Make changes to data here</a>
                <select class="change_select">
                    <a href="#personal"><option value="personal">Personal Data</option></a>
                    <a href="#customer"><option value="customer">Customer Data</option></a>
                    <a href="#technical"><option value="technical">Technical Data</option></a>
                    <a href="#recc"><option value="recc">Reccommendation</option></a>
                    <a href="#remarks"><option value="remarks">Remarks</option></a>
                </select>
                <input id="inp" type="text">
                <a href="#technical"><button id="change_select" value="oieurwf" onclick="showhide()">Try</button></a> --}}

                <a href="#personal"><button class="sel_btn">PERSONAL</button></a>
                <a href="#customer"><button class="sel_btn">CUSTOMER</button></a>
                <a href="#technical"><button class="sel_btn">TECHNICAL</button></a>
                <a href="#recc"><button class="sel_btn">RECCOMMENDATION</button></a>
                <a href="#remarks"><button class="sel_btn">REMARKS</button></a>
            </div>

            {{-- @include('inc.messages') --}}

            @if ($personal)
                <div id="personal" class="col-sm-6 col-sm-offset-3 mycontainer">

                    <h3 class="pannel_th">Personal</h3>
                    <form action="{{ action('DashController@update', $personal->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
        
                        <div class="form-group row">
                            <p class="input_lable">Customer Name</p>
                            <div class="col-md-12">
                                <input id="name" placeholder="Name" type="text" class="form-control" name="name" value="{{ $personal->name }}" required autofocus>
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <p class="input_lable">Address</p>
                            <div class="col-md-12">
                                <textarea id="address" placeholder="" class="form-control" name="address" rows="2">{{ $personal->address }}</textarea>
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <p class="input_lable">Contact/Tel.</p>
                            <div class="col-md-12">
                                <input id="contact" placeholder="Contact No." type="number" class="form-control" name="contact" value="{{ $personal->contact }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Activity or Nature of Business</p>
                            <div class="col-md-12">
                                <textarea id="buss_nature" placeholder="" class="form-control" name="buss_nature" rows="2">{{ $personal->business }}</textarea>
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Compound House</p>
                                <select name="compound_sel" class="form-control">
                                    <option selected>{{ $personal->comp_hse }}</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">If (Yes) Projected personals</p>
                                <input id="personals" placeholder="Projected personals" type="number" min="0" value="{{ $personal->proj_cust }}" class="form-control" name="proj_cust">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Estimated Sensor</p>
                            <div class="col-md-12">
                                <input id="sensor" placeholder="" type="text" class="form-control" value="{{ $personal->est_sensor }}" name="sensor">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Email</p>
                            <div class="col-md-12">
                                <input id="email" placeholder="" type="email" class="form-control" value="{{ $personal->email }}" name="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Digital Address/House No.</p>
                            <div class="col-md-12">
                                <input id="dig_add" placeholder="" type="text" class="form-control" value="{{ $personal->dig_address }}" name="dig_add">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Coordinates</p>
                            <div class="col-md-12">
                                <input id="cords" placeholder="" type="text" class="form-control" value="{{ $personal->coords }}" name="coords">
                            </div>
                        </div>
        
                        <div class="form-group row mb-0 pull-right">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn blue" name="store_action" value="update_personal"><i class="fa fa-save"></i> &nbsp; Update Pesonal Data &nbsp; </button>
                            </div>
                        </div>
                    </form>

                </div>
            @else
                <div id="personal" class="col-sm-6 col-sm-offset-3 mycontainer">
                    <h3 class="pannel_th">Remarks</h3>
                    <p>No data found for Remarks</p>
                </div>
            @endif

            @if ($customer)
                <div id="customer" class="col-sm-6 col-sm-offset-3 mycontainer">

                    <h3 class="pannel_th">Customer</h3>
                    <form action="{{ action('DashController@update', $customer->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
        
                        <div class="form-group row">
                            <p class="input_lable">Account No</p>
                            <div class="col-md-12">
                                <input id="acc_no" placeholder="" type="text" class="form-control" name="acc_no" value="{{ $customer->acc_no }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">SPN</p>
                            <div class="col-md-12">
                                <input id="spn" placeholder="" type="text" class="form-control" value="{{ $customer->spn }}" name="spn">
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <p class="input_lable">Geo-Code</p>
                            <div class="col-md-12">
                                <input id="geocode" placeholder="" type="text" class="form-control" value="{{ $customer->geocode }}" name="geocode">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Structure ID</p>
                            <div class="col-md-12">
                                <input id="structure_id" placeholder="" type="text" class="form-control" value="{{ $customer->structure_id }}" name="structure_id">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Type of Service</p>
                            <div class="col-md-12">
                                <select name="service_type" class="form-control">
                                    <option selected>{{ $customer->service_type }}</option>
                                    <option>Mother Meter</option>
                                    <option>Separate Meter</option>
                                </select>
                            </div>
                        </div>
        
                        <div class="form-group row mb-0 pull-right">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn blue" name="store_action" value="update_customer"><i class="fa fa-save"></i> &nbsp; Update Customer Data &nbsp; </button>
                            </div>
                        </div>
                    </form>

                </div>
            @else
                <div id="customer" class="col-sm-6 col-sm-offset-3 mycontainer">
                    <h3 class="pannel_th">Remarks</h3>
                    <p>No data found for Remarks</p>
                </div>
            @endif

            @if ($tech)
                <div id="technical" class="col-sm-6 col-sm-offset-3 mycontainer">
                    <h3 class="pannel_th">Technical</h3>
                    <form action="{{ action('DashController@update', $tech->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
        
                        <div class="form-group row">
                            <p class="input_lable">Meter No</p>
                            <div class="col-md-12">
                                <input id="meter_no" placeholder="" type="text" class="form-control" value="{{ $tech->meter_no }}" name="meter_no" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Meter Rating</p>
                                <input id="meter_rating" placeholder="" type="text" class="form-control" value="{{ $tech->meter_rating }}" name="meter_rating">
                            </div>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">A(1ph/3ph)</p>
                                <input id="ph" placeholder="" type="text" class="form-control" value="{{ $tech->ph }}" name="ph">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Location of Meter</p>
                            <div class="col-md-12">
                                <input id="meter_loc" placeholder="" type="text" class="form-control" value="{{ $tech->meter_loc }}" name="meter_loc" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Credit Meter</p>
                                <select name="credit_meter" class="form-control">
                                    <option selected>{{ $tech->credit_meter }}</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Prepaid Meter</p>
                                <select name="prepaid_meter" class="form-control">
                                    <option selected>{{ $tech->prepaid_meter }}</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <p class="input_lable">Type</p>
                            <div class="col-md-12">
                                <input id="type" placeholder="" type="text" class="form-control" value="{{ $tech->type }}" name="type">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Meter Reading</p>
                                <input id="meter_reading" placeholder="" type="text" class="form-control" value="{{ $tech->meter_reading }}" name="meter_reading">
                            </div>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Balance on Meter(GhC)</p>
                                <input id="meter_bal" placeholder="" type="number" min="0" class="form-control" value="{{ $tech->meter_bal }}" name="meter_bal">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Distance from service pole to house</p>
                            <div class="col-md-12">
                                <input type="text" id="pole_dist" placeholder="" class="form-control" value="{{ $tech->pole_dist }}" name="pole_dist">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Size</p>
                                <input id="size" placeholder="" type="text" class="form-control" value="{{ $tech->size }}" name="size">
                            </div>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Service Pole No.</p>
                                <input id="pole_no" placeholder="" type="number" min="0" class="form-control" value="{{ $tech->pole_no }}" name="pole_no">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Transformer No.</p>
                                <input id="trans_no" placeholder="" type="text" class="form-control" value="{{ $tech->trans_no }}" name="trans_no">
                            </div>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Transformer Rating</p>
                                <input id="trans_rate" placeholder="" type="text" class="form-control" value="{{ $tech->trans_rate }}" name="trans_rate">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 col_div">
                                <p class="input_lable">No. of service lines per pole</p>
                                <input type="number" min="0" id="lines_per_pole" placeholder="" class="form-control" value="{{ $tech->lines_per_pole }}" name="lines_per_pole">
                            </div>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">No. of Poles</p>
                                <input id="no_of_poles" placeholder="" type="number" min="0" class="form-control" value="{{ $tech->no_of_poles }}" name="no_of_poles">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Condition of service line</p>
                            <div class="col-md-12">
                                <input id="line_condition" placeholder="" type="text" class="form-control" value="{{ $tech->line_condition }}" name="line_condition">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Length of damage(metres)</p>
                            <div class="col-md-12">
                                <input type="text" id="damage_length" placeholder="" class="form-control" value="{{ $tech->damage_length }}" name="damage_length">
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <p class="input_lable">Transformer Classification</p>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">GMT</p>
                                <select name="gmt" class="form-control">
                                    <option selected>{{ $tech->gmt }}</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">PMT</p>
                                <select name="pmt" class="form-control">
                                    <option selected>{{ $tech->pmt }}</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Type of Pole</p>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">C/W/A</p>
                                <div class="col-md-12">
                                    <input type="text" id="cwa" placeholder="" class="form-control" value="{{ $tech->cwa }}" name="cwa">
                                </div>
                            </div>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Height</p>
                                <div class="col-md-12">
                                    <input type="text" id="height" placeholder="" class="form-control" value="{{ $tech->height }}" name="height">
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <p class="input_lable">Pole Condition</p>
                            <div class="col-md-12">
                                <input id="pole_condition" placeholder="" type="text" class="form-control" value="{{ $tech->pole_condition }}" name="pole_condition">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Phase of Meter Installed(Red/Yello/Blue)</p>
                            <div class="col-md-12">
                                <input id="meter_phase_inst" placeholder="" type="text" class="form-control" value="{{ $tech->meter_phase_inst }}" name="meter_phase_inst" required>
                            </div>
                        </div>
        
                        <div class="form-group row mb-0 pull-right">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn blue" name="store_action" value="update_tech"><i class="fa fa-save"></i> &nbsp; Update Technical Data &nbsp; </button>
                            </div>
                        </div>
                    </form>
                </div>
            @else
                <div id="tech" class="col-sm-6 col-sm-offset-3 mycontainer">
                    <h3 class="pannel_th">Remarks</h3>
                    <p>No data found for Remarks</p>
                </div>
            @endif

            @if ($recc)
                <div id="recc" class="col-sm-6 col-sm-offset-3 mycontainer">
                    <h3 class="pannel_th">Reccommendation</h3>
                    <form action="{{ action('DashController@update', $recc->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
        
                        <div class="form-group row">
                            <p class="input_lable">Rating of Meter to be Installed(1ph/3ph)</p>
                            <div class="col-md-12">
                                <input id="rate_to_install" placeholder="" type="text" class="form-control" value="{{ $recc->rate_to_install }}" name="rate_to_install" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Extra length of cable needed(Metres)</p>
                            <div class="col-md-12">
                                <input id="extra_cable_needed" placeholder="" type="text" class="form-control" value="{{ $recc->extra_cable_needed }}" name="extra_cable_needed">
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Date of Visit</p>
                            <div class="col-md-12">
                                <input id="date_of_visit" placeholder="" type="date" class="form-control" value="{{ $recc->date_of_visit }}" name="date_of_visit" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <p class="input_lable">Inspected By</p>
                            <div class="col-md-12">
                                <input id="inspected_by" placeholder="" type="text" class="form-control" value="{{ $recc->inspected_by }}" name="inspected_by" required>
                            </div>
                        </div>
        
                        <div class="form-group row mb-0 pull-right">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn blue" name="store_action" value="update_recc"><i class="fa fa-save"></i> &nbsp; Update Reccommendation &nbsp; </button>
                            </div>
                        </div>
                    </form>
                </div>
            @else
                <div id="recc" class="col-sm-6 col-sm-offset-3 mycontainer">
                    <h3 class="pannel_th">Reccommendation</h3>
                    <p>No data found for Remarks</p>
                </div>
            @endif

            @if ($remarks)
                <div id="remarks" class="col-sm-6 col-sm-offset-3 mycontainer">
                    <h3 class="pannel_th">Remarks</h3>
                    <form action="{{ action('DashController@update', $remarks->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <p class="input_lable">Approved for Installation</p>
                                <select name="approved_status" class="form-control" autofocus>
                                    <option selected>{{ $remarks->approved_status }}</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <p class="input_lable">If No, Reason?</p>
                            <div class="col-md-12">
                                <input id="no_reason" placeholder="" type="text" class="form-control" value="{{ $remarks->no_reason }}" name="no_reason">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Date</p>
                                <input id="date_approved" placeholder="" type="date" class="form-control" value="{{ $remarks->date_approved }}" name="date_approved" required>
                            </div>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Authorized By</p>
                                <input id="auth_by" placeholder="" type="text" class="form-control" value="{{ $remarks->auth_by }}" name="auth_by" required>
                            </div>
                        </div>
        
                        <div class="form-group row mb-0 pull-right">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn blue" name="store_action" value="update_remarks"><i class="fa fa-save"></i> &nbsp; Update Remarks &nbsp; </button>
                            </div>
                        </div>
                    </form>
                </div>
            @else
                <div class="col-sm-6 col-sm-offset-3 mycontainer">
                    <h3 class="pannel_th">Remarks</h3>
                    <form action="{{action('DashController@store')}}" method="POST">
                        @csrf
                        {{ session()->put('cust_id2', $personal->id) }}
                        <div class="form-group row">
                            <div class="col-md-12">
                                <p class="input_lable">Approved for Installation</p>
                                <select name="approved_status" class="form-control" autofocus>
                                    <option selected> -- Choose Yes/No -- </option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <p class="input_lable">If No, Reason?</p>
                            <div class="col-md-12">
                                <input id="no_reason" placeholder="" type="text" class="form-control" name="no_reason">
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Date</p>
                                <input id="date_approved" placeholder="" type="date" class="form-control" name="date_approved" required>
                            </div>
                            <div class="col-md-6 col_div">
                                <p class="input_lable">Authorized By</p>
                                <input id="auth_by" placeholder="" type="text" class="form-control" name="auth_by" required>
                            </div>
                        </div>
        
                        <div class="form-group row mb-0 pull-right">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn blue" name="store_action" value="save_remarks"><i class="fa fa-save"></i> &nbsp; Save & Proceed &nbsp; </button>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
            

            {{-- <div style="height: 30px">
            </div> --}}

        </div>
    </div>
    
    {{-- <script type="text/javascript">

        function showhide() {
            var e = document.getElementsById('inp').value;
            alert(e);
            p = document.getElementById('personal');

            if (opt == 'Customer Data') {
                document.getElementById('customer').style.display = "none";
                // p.style.display = "block"
            }
        }

    </script> --}}

</body>
</html>