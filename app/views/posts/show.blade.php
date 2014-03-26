@extends('layouts.master')

@section('title')
	{{{ $post->title }}}
@stop

@section('content')
	<div>
		<h2>{{{ $post->title }}}</h2>
		<p>{{{ $post->body }}}</p>
	</div>
@stop
