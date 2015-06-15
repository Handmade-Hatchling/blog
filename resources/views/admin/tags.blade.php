@extends('admin')

@section('body-class')
    <body class="admin tags">
    @stop

    @section('content')
        <h2>Images</h2>
        <hr>

        <h3>{!! link_to_action('TagsController@create', 'Create New Tag', [], ['class' => 'btn btn-primary']) !!}</h3>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Tag</th>
                    <th>Articles</th>
                    <th>Images</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{!! link_to_action('TagsController@edit', $tag->name, [$tag->id]) !!}</td>
                        <td>
                            @forelse($tag->articles as $article)
                                {{ $article->title }},
                            @empty
                                <strong>No Articles</strong>
                            @endforelse
                        </td>
                        <td>
                            @forelse($tag->images as $image)
                                {{ $image->title }},
                            @empty
                                <strong>No Images</strong>
                            @endforelse
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@stop