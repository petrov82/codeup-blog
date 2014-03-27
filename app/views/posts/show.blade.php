@extends('layouts.master')

@section('title')
	{{{ $post->title }}}
@stop

@section('content')
	<div class="blog-post">
		<h2 class="blog-post-title">{{{ $post->title }}}</h2>
		<small><u>Last updated at: {{{ $post->updated_at }}}</u></small>
		<p>{{{ $post->body }}}</p>
		<p><a href="{{{ action('PostsController@index')}}}">Return to posts index</a></p>
	</div>
@stop
