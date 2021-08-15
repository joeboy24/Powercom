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
                <h3 class="pannel_th">Supervisors Remarks</h3>
                <a href="/prev_sessions">Continue Previous Sessions</a>
            </div>

            <div class="col-sm-6 col-sm-offset-3 mycontainer">
                <form action="{{action('DashController@store')}}" method="POST">
                    @csrf

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