@extends('layouts.master')

@section('title')
	Blog Index
@stop

@section('content')

	@foreach ($posts as $post)
		<div class="blog-post">
			<h2 class="blog-post-title">{{{ $post->title }}}</h2>
			<p class="blog-post-title">{{{ $post->created_at }}}</p>
			<p>{{{ $post->body }}}</p>
		</div>
	@endforeach

@stop
