@extends('layouts.app')

@section('title', $category->title . " - Nirvana")

@section('content')
	<div class="jumbotron">
	<div class="container">
		@forelse ($articles as $article)
			<div class="row">
				<div class="col-sm-12">
					<h2 class="display-6">{{$article->title}} </h2>
					<h4 class="">{!!$article->description_short!!} </h4>
				</div>
			</div>
		@empty
			<h2 class="text-center">Пусто</h2>
		@endforelse

		{{$articles->links()}}
	</div>

@endsection