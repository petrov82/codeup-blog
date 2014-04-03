@extends('layouts.master')

@section('title')
	{{{ $post->title }}}
@stop

@section('content')
	<div class="blog-post">
		<h2 class="blog-post-title">{{{ $post->title }}}</h2>
		<small><u>Last updated at: {{{ $post->updated_at }}}</u>&nbsp;|&nbsp;</small>
		<small>Author: {{{ $post->user->user_name }}}</small>
		@if ($post->image_path != NULL)
		<div><img src="../uploads/{{ $post->image_path }}"></div>
		@endif
		<div class="row">
			<div class="col-md-10"><p>{{{ $post->body }}}</p></div>
		</div>
		<p>
			<a href="{{ action('PostsController@edit', $post->id) }}">Edit&nbsp;|&nbsp;</a>
			<a href="#" id="btnDeletePost">Delete&nbsp;|&nbsp;</a>
			<a href="{{{ action('PostsController@index')}}}">Index</a>
		</p>
		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
		{{ Form::close() }}
	</div>
@stop

@section('bottom-script')
<script>
	$('#btnDeletePost').on('click', function (e) {
		e.preventDefault();
	if (confirm('Are you sure you want to delete this post?')) {
		$('#formDeletePost').submit();
		}
	});
</script>
@stop
