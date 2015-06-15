@extends('app')

@section('body-class')
    <body class="articles articles__single">
@stop

@section('content')
    @unless($article->images->isEmpty())
        <div class="image__flex">
            @foreach($article->images as $image)
                <a href="{{ '/images/' . $image->filename }}" alt="{{ $image->alt_text }}" title="{{ $image->title }}">
                    <img src="{{ '/images/' . $image->thumb_name }}" alt="{{ $image->alt_text }}" class="articles__image blog">
                    <p class="image__caption">{{ $image->caption }}</p>
                </a>
            @endforeach
        </div>
    @endunless
        <article>
            <h1>{{ $article->title }}</h1>
            <hr>
            <div class="articles__meta">
                <h5>Author: {{ $article->staff->first_name }} {{ $article->staff->last_name }}</h5>
                @unless($article->tags->isEmpty())
                    <h5>Tags:</h5>
                    <ul>
                        @foreach($article->tags as $tag)
                            <li>{!! link_to_action('TagsController@show', $tag->name, ['tagsName' => $tag->name]) !!}</li>
                        @endforeach
                    </ul>
                @endunless
            </div>
            <div class="body">
                {{ $article->body }}
            </div>
        </article>
@stop
