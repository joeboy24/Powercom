<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PivoApps</title>
    <link href="/maindir/css/bootstrap.min.css" rel="stylesheet">
    <link href="/maindir/css/mainstyle.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
        <div class="col-sm-8 col-sm-offset-2 dash_container">

            <div class="col-sm-12 search_container">
                <form action="{{action('DashController@store')}}" method="POST">
                    @csrf
                    {{-- <form method="GET" action="{{ url('/dashboard') }}">
                    @csrf --}}
                    <div class="">

                        <div class="form-group row">
                            <div class="col-md-2 col_div">
                                <p class="input_lable">Phase</p>
                                <select name="phase" class="form-control">
                                    {{-- <option value="0" selected> -- Choose Phase-- </option> --}}
                                    <option>All</option>
                                    <option>1</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="col-md-3 col_div">
                                <p class="input_lable">Transformer</p>
                                <select name="trans" class="form-control">
                                    {{-- <option selected> -- Choose Yes/No -- </option> --}}
                                    <option>All</option>
                                    <option value="(c)">Community</option>
                                    <option value="(d)">Dedicated</option>
                                </select>
                            </div>
                            <div class="col-md-4 col_div">
                                <p class="input_lable">&nbsp;</p>
                                <button type="submit" name="store_action" value="search_load" class="btn search_btn"><i class="fa fa-search"></i>&nbsp;&nbsp;Search</button>
                                {{-- <button type="submit" name="store_action" value="search_report" class="btn search_btn"><i class="fa fa-print"></i></button> --}}
                                <a href="/userexport"><button type="button" class="btn search_btn"><i class="fa fa-download"></i></button></a>
                            </div>
                        </div>
                        {{-- <button type="submit" name="store_action" value="search_report" class="btn search_btn"><i class="fa fa-search"></i>&nbsp;&nbsp;Search</button> --}}
                    
                    </div>
                </form>
                {{-- <p style="text-transform: capitalize">'customer_no', 'name', 'address', 'contact', 'business', 'comp_hse', 'proj_cust', 
                    'est_sensor', 'email', 'dig_address', 'coords', 'acc_no', 'spn', 'geocode', 'structure_id', 'service_type',
                    'meter_no', 'meter_rating', 'ph', 'meter_loc', 'credit_meter', 'prepaid_meter', 'type', 'meter_reading', 
                    'meter_bal', 'pole_dist', 'size', 'pole_no', 'trans_no', 'trans_rate', 'lines_per_pole', 'no_of_poles', 
                    'line_condition', 'damage_length', 'gmt', 'pmt', 'cwa', 'height', 'pole_condition', 'meter_phase_inst',
                    'personal_id',
                    'rate_to_install',
                    'extra_cable_needed',
                    'date_of_visit',
                    'inspected_by',
                    'approved_status',
                    'no_reason',
                    'date_approved',
                    'auth_by'
                </p> --}}
            </div> 

            <div class="col_120">

                <div class="col-sm-12 my_header">
                    <h3>Database</h3>
                    <p>View and make changes to data here</p>
                </div>
                
                @if (count($report) > 0)
                    <table class="data_view">
                        <thead>
                            <th>#</th>
                            <th>CUSTOMER DATA</th>
                            <th>TRANFORMER NAME</th>
                            <th class="actions">ACTIONS</th>
                        </thead>
                        <tbody>
                            @foreach ($report as $item)
                                <tr>
                                    <td>{{ $c++ }}</td>
                                    
                                    <td>
                                        @if ($item->status == 'yes')
                                            <b class="cid">{{ $item->customer_no }}</b><br>
                                        @else
                                            <b class="cid"><i class="fa fa-warning warning"></i>{{ $item->customer_no }}</b><br>
                                        @endif
                                        <b class="cname">{{ $item->name }}</b><br>
                                        <b class="cno">{{ $item->contact }}</b>
                                        {{ $item->address }}<br>
                                        <b class="cid"> {{ $item->meter_loc }}</b>
                                    </td>

                                    <td>
                                        <b class="cname">{{ $item->trans_no }}</b>
                                    </td>

                                    <td>
                                        <a href="/dashboard/{{ $item->id }}"><button class="edit"><i class="fa fa-pencil"></i></button></a>
                                        <a href=""><button class="print"><i class="fa fa-print"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $personal->links() }} --}}
                @else
                    <p>No Data Found</p>
                @endif

            </div>
        </div>

</body>
</html>