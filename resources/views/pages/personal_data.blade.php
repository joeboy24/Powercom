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
                <h3 class="pannel_th">Personal Data</h3>
                <a href="/prev_sessions">Continue Previous Sessions</a>
            </div>

            {{-- @include('inc.messages') --}}

            <div class="col-sm-6 col-sm-offset-3 mycontainer">
                <form action="{{action('DashController@store')}}" method="POST">
                    @csrf
    
                    <div class="form-group row">
                        <p class="input_lable">Customer Name</p>
                        <div class="col-md-12">
                            <input id="name" placeholder="Name" type="text" class="form-control" name="name" required autofocus>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <p class="input_lable">Address</p>
                        <div class="col-md-12">
                            <textarea id="address" placeholder="" class="form-control" name="address" rows="2"></textarea>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <p class="input_lable">Contact/Tel.</p>
                        <div class="col-md-12">
                            <input id="contact" placeholder="Contact No." type="number" class="form-control" name="contact" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Activity or Nature of Business</p>
                        <div class="col-md-12">
                            <textarea id="buss_nature" placeholder="" class="form-control" name="buss_nature" rows="2"></textarea>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <div class="col-md-6 col_div">
                            <p class="input_lable">Compound House</p>
                            <select name="compound_sel" class="form-control">
                                <option selected> -- Choose Yes/No -- </option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="col-md-6 col_div">
                            <p class="input_lable">If (Yes) Projected Customers</p>
                            <input id="customers" placeholder="Projected Customers" type="number" min="0" class="form-control" name="proj_cust">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Estimated Sensor</p>
                        <div class="col-md-12">
                            <input id="sensor" placeholder="" type="text" class="form-control" name="sensor">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Email</p>
                        <div class="col-md-12">
                            <input id="email" placeholder="" type="email" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Digital Address/House No.</p>
                        <div class="col-md-12">
                            <input id="dig_add" placeholder="" type="text" class="form-control" name="dig_add">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Coordinates</p>
                        <div class="col-md-12">
                            <input id="cords" placeholder="" type="text" class="form-control" name="coords">
                        </div>
                    </div>
    
                    <div class="form-group row mb-0 pull-right">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn blue" name="store_action" value="save_personal"><i class="fa fa-save"></i> &nbsp; Save & Proceed &nbsp; </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>
</html>