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
                <h3 class="pannel_th">Process Complete</h3>
                <a href="/">Back to Home</a>
            </div>

            <div class="col-sm-6 col-sm-offset-3 mycontainer">
                
                <a href="/personal"><button type="submit" class="btn btn-info" name="store_action" value="save_remarks"><i class="fa fa-save"></i> &nbsp; New Entry &nbsp; </button></a>
                <a href="/"><button type="submit" class="btn blue pull-right" name="store_action" value="save_remarks"><i class="fa fa-save"></i> &nbsp; Return to Home &nbsp; </button></a>
                        
            </div>

        </div>
    </div>


</body>
</html>