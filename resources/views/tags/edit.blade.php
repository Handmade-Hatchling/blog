@extends('admin')

@section('body-class')
    <body class="admin images">
@stop

@section('content')
    <h1>Edit: {!! $tag->name !!}</h1>
    {!! Form::model($tag, ['method' => 'PATCH', 'action' => ['TagsController@update', $tag->id], 'class' => 'well']) !!}
    @include('tags._form', ['submitButtonText' => 'Update Tag'])
    {!! Form::close() !!}
    @include('errors.list')
@endsection