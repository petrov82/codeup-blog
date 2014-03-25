@extends('layouts.master')

@section('title')
	Hello!
	@stop

@section('content')
    <div class="jumbotron">
			<h1>Hello, {{{ $name }}}!</h1>
		</div>
@stop
