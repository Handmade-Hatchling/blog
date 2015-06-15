@extends('admin')

@section('body-class')
    <body class="images">
@endsection

@section('content')
    <h1>Upload New Images</h1>
    <hr>
    {!! Form::model($image = new \App\Image, ['url' => 'admin/images', 'files' => true, 'class' => 'well']) !!}
    @include('images._form', ['submitButtonText' => 'Upload Image'])
    {!! Form::close() !!}
    @include('errors.list')
@endsection
