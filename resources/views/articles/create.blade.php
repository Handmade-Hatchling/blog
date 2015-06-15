@extends('admin')

@section('body-class')
    <body class="admin articles">
@stop

@section('content')
    <h1>Write a New Article</h1>
    <hr>
    {!! Form::model($article = new \App\Article, ['url' => 'admin/articles', 'files' => true, 'class' => 'well']) !!}
        @include('articles._form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}
    @include('errors.list')
@stop
