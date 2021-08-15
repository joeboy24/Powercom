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
                <form method="GET" action="{{ url('/dashboard') }}">
                    @csrf
                    <div class="">
                        <input type="search" value="" class="search_field" id="entrysearch" name="entrysearch" placeholder="Search Records...">
                        <button type="submit" class="btn search_btn"><i class="fa fa-search"></i></button>
                        <a href="/dashboard" class="refresh_a"><button type="button" class="btn search_btn" id="mb"><i class="fa fa-refresh"></i></button></a>
                    </div>
                </form>
            </div>

            <div class="col_120">

                <div class="col-sm-12 my_header">
                    <h3>Database</h3>
                    <p>View and make changes to data here</p>
                </div>
                
                @if (count($personal) > 0)
                    <table class="data_view">
                        <thead>
                            <th>#</th>
                            <th>CUSTOMER DATA</th>
                            <th class="actions">ACTIONS</th>
                        </thead>
                        <tbody>
                            @foreach ($personal as $item)
                                <tr>
                                    <td>{{ $c++ }}</td>
                                    
                                    <td>
                                        @if ($item->status == 'yes')
                                            <b class="cid"></button> {{ $item->customer_no }}</b><br>
                                        @else
                                            <b class="cid"><i class="fa fa-warning warning"></i></button> {{ $item->customer_no }}</b><br>
                                        @endif
                                        <b class="cname">{{ $item->name }}</b><br>
                                        <b class="cno">{{ $item->contact }}</b>
                                        {{-- {{ $item->personal->id }} --}}
                                    </td>

                                    <td>
                                        <a href="/dashboard/{{ $item->id }}"><button class="edit"><i class="fa fa-pencil"></i></button></a>
                                        <a href=""><button class="print"><i class="fa fa-print"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $personal->links() }}
                @else
                    <p>No Data Found</p>
                @endif

            </div>
        </div>

</body>
</html>