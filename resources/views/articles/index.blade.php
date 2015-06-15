@extends('app')

@section('body-class')
    <body class="articles">
@stop

@section('content')
    <div class="articles__list">
        <h2>Articles</h2>
        <hr>
        @foreach ($articles as $article)
            <article>
                @unless($article->images->isEmpty())
                    <img src="{{ '/images/' . $article->images[0]->thumb_name }}" alt="{{ $article->images[0]->alt_text }}" class="articles__image blog">
                @endunless

                <div class="articles__content">
                    <h2>{!! link_to_action('ArticlesController@show', $article->title, [$article->id]) !!}</h2>
                    <span class="articles__meta">
                        Author: {{ $article->staff->first_name }} {{ $article->staff->last_name }}<br>
                        Published: {{ $article->published_at }}<br>
                        @unless($article->tags->isEmpty())
                            Tags:
                            <ul>
                                @foreach($article->tags as $tag)
                                    <li>{!! link_to_action('TagsController@show', $tag->name, ['tagsName' => $tag->name]) !!}</li>
                                @endforeach
                            </ul>
                        @endunless
                    </span>
                    <div class="body">
                        {{ $article->body }}
                    </div>
                </div>
            </article>
        @endforeach
    </div>

    {!! $articles->render() !!}

@stop
