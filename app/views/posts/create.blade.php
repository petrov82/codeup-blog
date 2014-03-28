@extends('layouts.master')

@section('title')
New Post
@stop

@section('content')
 	<div class="container-fluid">
 		<div class=container>
 			<div class="blog-header">
				<h1 class="blog-title">Create a new Post<small> /*all fields required*/</small></h1>
	 			{{ Form::open(array('class' => 'form-horizontal', 'action' => 'PostsController@store')) }}
			</div>

					@include('posts.form')

				{{ Form::close() }}
			<p><a href="{{{ action('PostsController@index') }}}">Index</a></p>

		</div>
	</div>
@stop
