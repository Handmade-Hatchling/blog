@extends('admin')

@section('body-class')
    <body class="admin images">
@stop

@section('content')
    <h1>Create a New Tag</h1>
    {!! Form::model($tag = new \App\Tag, ['url' => 'admin/tags', 'class' => 'well']) !!}
    @include('tags._form', ['submitButtonText' => 'Create Tag'])
    {!! Form::close() !!}
    @include('errors.list')
@endsection