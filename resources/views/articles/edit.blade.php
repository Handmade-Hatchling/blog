@extends('admin')

@section('body-class')
    <body class="admin articles">
@stop

@section('content')
    <h1>Edit: {!! $article->title !!}</h1>
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id], 'files' => true, 'class' => 'well']) !!}
        @include('articles._form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}
    @include('errors.list')
@stop
