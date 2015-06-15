@extends('admin')

@section('body-class')
    <body class="admin images">
@stop

@section('content')
    <h1>Edit: {!! $image->title !!}</h1>
    {!! Form::model($image, ['method' => 'PATCH', 'action' => ['ImagesController@update', $image->id], 'files' => true, 'class' => 'well']) !!}
    <div class="image">
        <img src="{{ asset("images/{$image->thumb_name}") }}" title="{{ $image->title }}" alt="{{ $image->alt_text }}" />
        <img src="{{ asset("images/{$image->filename}") }}" title="{{ $image->title }}" alt="{{ $image->alt_text }}" />
        <div class="image__meta">
            <h3>{{ $image->title }}</h3>
            <p>{{ $image->caption }}</p>
        </div>
    </div>
    @include('images._form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}
    @include('errors.list')
@endsection
