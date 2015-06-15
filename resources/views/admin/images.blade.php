@extends('admin')

@section('body-class')
    <body class="admin images">
@stop

@section('content')
    <h2>Images</h2>
    <hr>

    <h3>{!! link_to_action('ImagesController@create', 'Upload New Images', [], ['class' => 'btn btn-primary']) !!}</h3>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Article</th>
                <th>Tags</th>
                <th>Uploaded Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($images as $image)
                <tr>
                    <td><img src="{{ asset("images/{$image->thumb_name}") }}" title="{{ $image->title }}" alt="{{ $image->alt_text }}" /></td>
                    <td>{!! link_to_action('ImagesController@edit', $image->title, [$image->id]) !!}</td>
                    <td>
                        @forelse($image->articles as $article)
                            {{ $article->title }},
                        @empty
                            <strong>No Articles</strong>
                        @endforelse
                    </td>
                    <td>
                        @forelse($image->tags as $tag)
                            {{ $tag->name }},
                        @empty
                            <strong>No Tags</strong>
                        @endforelse
                    </td>
                    <td>{{ $image->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop