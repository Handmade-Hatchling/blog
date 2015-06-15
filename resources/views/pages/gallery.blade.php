@extends('app')

@section('body-class')
    <body class="gallery">
@stop

@section('content')
    <h2>Gallery</h2>
    <hr>
    <div class="images">
        @forelse($images as $image)
            <div class="images__item">
                <a href="{{ asset('images/' . $image->filename) }}" title="{{ $image->alt_text }}">
                    <img src="{{ asset('images/' . $image->thumb_name) }}" alt="{{ $image->alt_text }}" width="200" height="150"/>
                </a>
            </div>
        @empty
            <p>
                No images yet...
            </p>
        @endforelse
    </div>

    {!! $images->render() !!}
@endsection
