@extends('app')

@section('body-class')
<body class="home">
@stop

@section('content')

<p class="site__intro">
    Here at Handmade Hatchling you'll find DIYs, tutorials and recipes. Everything is added to my <a href="https://www.etsy.com/">Etsy shop</a> regularly. Check it out.
</p>

<div class="cta">
    @foreach($images as $alt_text => $href)
        <div class="cta__item">
            {{--{!! link_to_action('') !!}--}}
            <a href="/tags/" title="{{ $alt_text }}">
                <img src="{{ $href }}" alt="{{ $alt_text }}" />
                <h3>{{ $alt_text }}</h3>
            </a>
        </div>
    @endforeach
</div>

@endsection
