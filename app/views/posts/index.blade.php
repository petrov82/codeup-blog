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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<div class="blog-post">
					<h2 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id)}}}">{{{ $post->title }}}</a></h2>
					<p>
						<small>Last Updated at: {{{ $post->updated_at->setTimezone('America/Chicago')->format('l, M j, Y @ h:i A') }}}</small>
					</p>
					<p>
						<small>Created at: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, M j, Y @ h:i A') }}}</small>
						<a href="{{ action('PostsController@edit', $post->id) }}">&nbsp;|&nbsp;Edit</a>
					</p>
					<p>
						{{{ Str::words($post->body, 20) }}}
					</p>
				</div>
			</div>
		</div>
	</div>
@endforeach

	{{ $posts->links() }}
@stop

