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
                <h3 class="pannel_th">Technical Data</h3>
                <a href="/prev_sessions">Continue Previous Sessions</a>
            </div>

            <div class="col-sm-6 col-sm-offset-3 mycontainer">
                <form action="{{action('DashController@store')}}" method="POST">
                    @csrf
    
                    <div class="form-group row">
                        <p class="input_lable">Meter No</p>
                        <div class="col-md-12">
                            <input id="meter_no" placeholder="" type="text" class="form-control" name="meter_no" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 col_div">
                            <p class="input_lable">Meter Rating</p>
                            <input id="meter_rating" placeholder="" type="text" class="form-control" name="meter_rating">
                        </div>
                        <div class="col-md-6 col_div">
                            <p class="input_lable">A(1ph/3ph)</p>
                            <input id="ph" placeholder="" type="text" class="form-control" name="ph">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Location of Meter</p>
                        <div class="col-md-12">
                            <input id="meter_loc" placeholder="" type="text" class="form-control" name="meter_loc" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 col_div">
                            <p class="input_lable">Credit Meter</p>
                            <select name="credit_meter" class="form-control">
                                <option selected> -- Choose Yes/No -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="col-md-6 col_div">
                            <p class="input_lable">Prepaid Meter</p>
                            <select name="prepaid_meter" class="form-control">
                                <option selected> -- Choose Yes/No -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <p class="input_lable">Type</p>
                        <div class="col-md-12">
                            <input id="type" placeholder="" type="text" class="form-control" name="type">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 col_div">
                            <p class="input_lable">Meter Reading</p>
                            <input id="meter_reading" placeholder="" type="text" class="form-control" name="meter_reading">
                        </div>
                        <div class="col-md-6 col_div">
                            <p class="input_lable">Balance on Meter(GhC)</p>
                            <input id="meter_bal" placeholder="" type="number" min="0" class="form-control" name="meter_bal">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Distance from service pole to house</p>
                        <div class="col-md-12">
                            <input type="text" id="pole_dist" placeholder="" class="form-control" name="pole_dist">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 col_div">
                            <p class="input_lable">Size</p>
                            <input id="size" placeholder="" type="text" class="form-control" name="size">
                        </div>
                        <div class="col-md-6 col_div">
                            <p class="input_lable">Service Pole No.</p>
                            <input id="pole_no" placeholder="" type="number" min="0" class="form-control" name="pole_no">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 col_div">
                            <p class="input_lable">Transformer No.</p>
                            <input id="trans_no" placeholder="" type="text" class="form-control" name="trans_no">
                        </div>
                        <div class="col-md-6 col_div">
                            <p class="input_lable">Transformer Rating</p>
                            <input id="trans_rate" placeholder="" type="text" class="form-control" name="trans_rate">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 col_div">
                            <p class="input_lable">No. of service lines per pole</p>
                            <input type="number" min="0" id="lines_per_pole" placeholder="" class="form-control" name="lines_per_pole">
                        </div>
                        <div class="col-md-6 col_div">
                            <p class="input_lable">No. of Poles</p>
                            <input id="no_of_poles" placeholder="" type="number" min="0" class="form-control" name="no_of_poles">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Condition of service line</p>
                        <div class="col-md-12">
                            <input id="line_condition" placeholder="" type="text" class="form-control" name="line_condition">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Length of damage(metres)</p>
                        <div class="col-md-12">
                            <input type="text" id="damage_length" placeholder="" class="form-control" name="damage_length">
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <p class="input_lable">Transformer Classification</p>
                        <div class="col-md-6 col_div">
                            <p class="input_lable">GMT</p>
                            <select name="gmt" class="form-control">
                                <option selected> -- Choose Yes/No -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="col-md-6 col_div">
                            <p class="input_lable">PMT</p>
                            <select name="pmt" class="form-control">
                                <option selected> -- Choose Yes/No -- </option>
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
                                <input type="text" id="cwa" placeholder="" class="form-control" name="cwa">
                            </div>
                        </div>
                        <div class="col-md-6 col_div">
                            <p class="input_lable">Height</p>
                            <div class="col-md-12">
                                <input type="text" id="height" placeholder="" class="form-control" name="height">
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <p class="input_lable">Pole Condition</p>
                        <div class="col-md-12">
                            <input id="pole_condition" placeholder="" type="text" class="form-control" name="pole_condition">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Phase of Meter Installed(Red/Yello/Blue)</p>
                        <div class="col-md-12">
                            <input id="meter_phase_inst" placeholder="" type="text" class="form-control" name="meter_phase_inst" required>
                        </div>
                    </div>
    
                    <div class="form-group row mb-0 pull-right">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn blue" name="store_action" value="save_tech"><i class="fa fa-save"></i> &nbsp; Save & Proceed &nbsp; </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>
</html>