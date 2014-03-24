@extends('layouts.master')

@section('title')
	Roll the Dice!
	@stop

@section('content')
	<div class="container theme-showcase" role="main">
		<div class="jumbotron">
			<h1>You {{{ $didroll }}} Guessed! Here is your <a href="http://www.dailywritingtips.com/judgement-or-judgment/">Judgement</a>:</h1>
			<p> {{{ $result }}} </p>
		</div>
	</div>
@stop
