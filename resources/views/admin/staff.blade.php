@extends('admin')

@section('body-class')
    <body class="admin staff">
@stop

@section('content')
    <h1 class="page-header">Staff List</h1>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            </thead>
            @foreach($staff as $member)
                <tbody>
                    <tr>
                        <td>{{ $member->first_name }} {{ $member->last_name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->role_id }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@stop