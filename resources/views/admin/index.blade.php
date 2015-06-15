@extends('admin')

@section('body-class')
    <body class="admin">
@stop

@section('content')
    <h1 class="page-header">Dashboard</h1>

    {{-- <div class="row placeholders">
        @for($i = 0; $i < 2; $i++)
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="http://placehold.it/200/0D8FDB/FFFFFF" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Label</h4>
            <span class="text-muted">Something else</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="http://placehold.it/200/39DBAC/000000" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Label</h4>
            <span class="text-muted">Something else</span>
        </div>
        @endfor
    </div> --}}

    {{-- <h2 class="sub-header">Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < 17; $i++)
            <tr>
                <td>{!! $i + 1000 !!}</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            @endfor
            </tbody>
        </table>
    </div> --}}
@stop
