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
                <h3 class="pannel_th">Recommendation</h3>
                <a href="/prev_sessions">Continue Previous Sessions</a>
            </div>

            <div class="col-sm-6 col-sm-offset-3 mycontainer">
                <form action="{{action('DashController@store')}}" method="POST">
                    @csrf
    
                    <div class="form-group row">
                        <p class="input_lable">Rating of Meter to be Installed(1ph/3ph)</p>
                        <div class="col-md-12">
                            <input id="rate_to_install" placeholder="" type="text" class="form-control" name="rate_to_install" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Extra length of cable needed(Metres)</p>
                        <div class="col-md-12">
                            <input id="extra_cable_needed" placeholder="" type="text" class="form-control" name="extra_cable_needed">
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Date of Visit</p>
                        <div class="col-md-12">
                            <input id="date_of_visit" placeholder="" type="date" class="form-control" name="date_of_visit" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <p class="input_lable">Inspected By</p>
                        <div class="col-md-12">
                            <input id="inspected_by" placeholder="" type="text" class="form-control" name="inspected_by" required>
                        </div>
                    </div>
    
                    <div class="form-group row mb-0 pull-right">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn blue" name="store_action" value="save_recc"><i class="fa fa-save"></i> &nbsp; Save & Proceed &nbsp; </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


    {{-- <form action="{{action('DashController@store')}}" method="POST">
        @csrf

        <div class="form-group row">
            <p class="input_lable">Customer Name</p>
            <div class="col-md-12">
                <input id="name" placeholder="Name" type="text" class="form-control" name="name" required autofocus>
            </div>
        </div>

        <div class="form-group row">

            <div class="col-md-12">
                <input id="email" placeholder="Email" type="email" class="form-control" name="email" required>
            </div>
        </div>

        <div class="form-group row">

            <div class="col-md-12">
                <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
            </div>
        </div>

        <div class="form-group row">

            <div class="col-md-12">
                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group row mb-0 pull-right">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-info" name="store_action" value="create_user"><i class="fa fa-save"></i> &nbsp; Next</button>
            </div>
        </div>
    </form> --}}


</body>
</html>