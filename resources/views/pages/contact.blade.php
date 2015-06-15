@extends('app')

@section('body-class')
<body class="contact">
@stop

@section('content')
<h2>Contact Us!</h2>
<hr>
{!! Form::open(['action' => 'PagesController@storeContact']) !!}
    <div class="form__group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null) !!}
    </div>

    <div class="form__group">
        {!! Form::label('message', 'Message:') !!}
        {!! Form::textarea('message', null) !!}
    </div>

    <div class="form__group">
        {!! Form::submit('Send Email') !!}
    </div>

{!! Form::close() !!}
@stop

@section('footer')
{{-- <script>alert('Contact Form Scripts');</script> --}}
@stop
