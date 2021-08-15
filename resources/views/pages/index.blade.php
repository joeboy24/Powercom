@extends('layouts.app')

@section('content')

    <div class="col-sm-8 col-sm-offset-2 dash_container">
        <a href="/personal">
            <div class="col_60">
                <i class="fa fa-pencil-square"></i>
                <h3>New Entry</h3>
                <p>Make new entry</p>
            </div>
        </a>
        <a href="">
            <div class="col_60">
                <i class="fa fa-edit"></i>
                <h3>Alter</h3>
                <p>Make changes to entry</p>
            </div>
        </a>
        <a href="">
            <div class="col_60">
                <i class="fa fa-gear"></i>
                <h3>Extras</h3>
                <p>New Entry</p>
            </div>
        </a>
        <a href="/dashboard">
            <div class="col_60">
                <i class="fa fa-th-large"></i>
                <h3>Database</h3>
                <p>View and update data</p>
            </div>
        </a>
    </div>

@endsection
