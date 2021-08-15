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
                <h3 class="pannel_th">Customer Data</h3>
                <a href="/prev_sessions">Continue Previous Sessions</a>
            </div>

            <div class="col-sm-6 col-sm-offset-3 mycontainer">
                
                <form action="{{action('DashController@store')}}" method="POST">
                    @csrf
    
                    <div class="form-group row">
                        <p class="input_lable">Account No</p>
                        <div class="col-md-12">
                            <input id="acc_no" placeholder="" type="text" class="form-control" name="acc_no" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">SPN</p>
                        <div class="col-md-12">
                            <input id="spn" placeholder="" type="text" class="form-control" name="spn">
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <p class="input_lable">Geo-Code</p>
                        <div class="col-md-12">
                            <input id="geocode" placeholder="" type="text" class="form-control" name="geocode">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Structure ID</p>
                        <div class="col-md-12">
                            <input id="structure_id" placeholder="" type="text" class="form-control" name="structure_id">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Type of Service</p>
                        <div class="col-md-12">
                            <select name="service_type" class="form-control">
                                <option selected>-- Choose Type --</option>
                                <option>Mother Meter</option>
                                <option>Separate Meter</option>
                            </select>
                        </div>
                    </div>

                    <!--div class="form-group row">
                        <p class="input_lable">Type of Service</p>
                        <div class="col-md-12 radio-group radio_div">
                            <label>Mother Meter &nbsp; <input id="mother" type="radio"></label>
                            <label>Separate Meter &nbsp; <input id="separate" type="radio"></label>
                        </div>
                    </div-->
    
                    <div class="form-group row mb-0 pull-right">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn blue" name="store_action" value="save_customer"><i class="fa fa-save"></i> &nbsp; Save & Proceed &nbsp; </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>
</html>