@extends('layouts.master')

@section('title')
Edit Post
 @stop

@section('content')
	<div class="container-fluid">
		<div class=container>
			<div class="blog-header">
				<h1 class="blog-title">Edit Your Post<small> /*all fields required*/</small></h1>
				{{ Form::model($post, array('class' => 'form-horizontal', 'action' => array('PostsController@update', $post->id), 'files'=> 'true', 'method' => 'put')) }}
			</div>

					@include('posts.form')

				{{ Form::close() }}
				<p><a href="{{{ action('PostsController@index') }}}">Index</a></p>
		</div>
	</div>
@stop
