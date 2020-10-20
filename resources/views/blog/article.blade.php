@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_keyword', $article->meta_keyword)
@section('meta_description', $article->meta_description)

@section('content')
	<style>
		#article_desc img{
			width: 20px;
		}
	</style>
	<div class="container-md">
		<div class="row">
			<div class="col-sm-12">
				<h1>{{$article->title}}</h1>
				<p>{!!$article->description_short!!}</p>
				<p id = "article_desc">{!!$article->description!!}</p>
			</div>
		</div>
		<a href="{{url('/')}}">Назад</a>
	</div>



@endsection