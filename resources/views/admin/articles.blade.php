@extends('admin')

@section('body-class')
    <body class="admin articles">
    @stop

@section('content')
    <h2>Articles</h2>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Author</th>
                <th>Article Title</th>
                <th>Tags</th>
                <th>Created Date</th>
                <th>Publish Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->staff->first_name }} {{ $article->staff->last_name }}</td>
                    <td>{!! link_to_action('ArticlesController@edit', $article->title, [$article->id]) !!}</td>
                    <td>
                        @forelse($article->tags as $tag)
                            {{ $tag->name }},
                        @empty
                            <strong>No Tags</strong>
                        @endforelse
                    </td>
                    <td>{{ $article->created_at }}</td>
                    <td>{{ $article->published_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop