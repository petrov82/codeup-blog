@extends('layouts.master')

@section('title')
	Blog Index
@stop

@section('content')
	<div>
		<h1><u>The Blogroll</u></h1>
		<a href="{{ action('PostsController@create') }}" class="btn btn-primary btn-lg active" role="button">Create an New Post</a>

	</div>
	@foreach ($posts as $post)
		<div class="blog-post">
			<h2 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id)}}}">{{{ $post->title }}}</a></h2>
			<small><u>Last updated at: {{{ $post->updated_at }}}</u></small>
			<p>{{{ $post->body }}}</p>
			<p><a href="{{ action('PostsController@edit', $post->id) }}">Edit this post</a>
		</div>
	@endforeach
@stop
