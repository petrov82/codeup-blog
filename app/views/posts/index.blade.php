@extends('layouts.master')

@section('title')
	Blog Index
@stop

@section('content')
	<div>
		<h1><u>The Blogroll</u></h1>
		<a href="{{ action('PostsController@create') }}" class="btn btn-primary btn-lg active" role="button">Create an New Post</a>

	</div>

		{{ $posts->links() }}

	@foreach ($posts as $post)
		<div class="blog-post">
			<h2 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id)}}}">{{{ $post->title }}}</a></h2>
			<p>
				<small><u>Last updated at: {{{ $post->updated_at->setTimezone('America/Chicago')->format('l, M j, Y @ h:i A') }}}</u></small>
				<a href="{{ action('PostsController@edit', $post->id) }}">&nbsp;|&nbsp;Edit</a>
			</p>
			<p>{{{ $post->body }}}</p>
			
		</div>
	@endforeach

	{{ $posts->links() }}
@stop

