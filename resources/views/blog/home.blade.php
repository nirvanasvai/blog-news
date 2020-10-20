@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row">
        @foreach($articles as $article)
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{route('article', $article->slug)}}" class="stretched-link">{{$article->title}}</a></h5>
                    <p class="card-text">{!! $article->image_show !!}</p>
                    <a href="{{route('article', $article->slug)}}">Подобронее</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">Новости Мира</strong>
                @foreach($worldnews as $article)
                    <h5 class="mb-0"><a href="{{route('article', $article->slug)}}" class="stretched-link">{{$article->title}}</a></h5>
                <img class="card-text mb-auto">{!!$article->image_show!!}</img>
                <a href="{{route('article', $article->slug)}}" class="stretched-link">Подробнее</a>
                @endforeach
            </div>
            <div class="col-auto d-none d-lg-block">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Казахстан</strong>
                @foreach($kaznews as $article)
                    <h5 class="mb-0"><a href="{{route('article', $article->slug)}}" class="stretched-link">{{$article->title}}</a></h5>
                <p class="mb-auto">{!! $article->description_short !!}</p>
                <a href="{{route('article', $article->slug)}}" class="stretched-link">Подробнее</a>
                @endforeach
            </div>
            <div class="col-auto d-none d-lg-block">
            </div>
        </div>
    </div>
</div>
</div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-4 mb-4 font-italic border-bottom">
                    Новости (категория)
                </h3>
                @foreach($articless as $article)

                <div class="blog-post">
                    <h5 class="blog-post-title"><a href="{{route('article', $article->slug)}}" class="stretched-link">{{$article->title}}</a></h5>
                    <p>{!! $article->description_short !!}</p>
                    <hr>
                </div>
                @endforeach

            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-4 mb-3 bg-light rounded">
                    @foreach($bottom as $article)
                        <h5 class="font-italic"><a href="{{route('article', $article->slug)}}"> {{$article->title}}</a> </h5>
                    <p class="mb-0">{!! $article->description_short !!}</p>
                    @endforeach

                </div>

@endsection
