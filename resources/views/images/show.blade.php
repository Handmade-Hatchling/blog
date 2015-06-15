@extends('app')

@section('body-class')
    <body class="gallery image__detail">
@endsection

@section('content')
    <div class="image">
        <img src="{{ asset("images/{$image->filename}") }}" title="{{ $image->title }}" alt="{{ $image->alt_text }}" />
        <div class="image__meta">
            <h3>{{ $image->title }}</h3>
            <p>{{ $image->caption }}</p>
        </div>
    </div>
@endsection
