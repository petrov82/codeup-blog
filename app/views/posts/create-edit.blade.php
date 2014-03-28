@extends('layouts.master')

@section('title')
	@if (empty($post->id))
		New Post
	@else
		Edit Post
	@endif
 @stop

@section('content')
 	<div class="container-fluid">
 		<div class=container>
 			<div class="blog-header">
	 			@if (empty($post->id))
					<h1 class="blog-title">Create a new Post<small> /*all fields required*/</small></h1>
	 			{{ Form::open(array('class' => 'form-horizontal', 'action' => 'PostsController@store')) }}
	 			@else
	 				<h1 class="blog-title">Edit Your Post<small> /*all fields required*/</small></h1>
	 			{{ Form::model($post, array('class' => 'form-horizontal', 'action' => array('PostsController@update', $post->id), 'method' => 'put')) }}
				@endif
			</div>
			  <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
			    {{ Form::label('title', 'Title', array('class' => 'col-sm-2 control-label')) }}
			    <div class="col-sm-10">
			      {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
					{{ $errors->has('title') ? $errors->first('title', '<span class="help-block">:message</span>') : '' }}
			    </div>
			  </div>
			  <div class="form-group {{ $errors->has('body') ? 'has-error' : "" }}">
			     {{ Form::label('body', 'Body', array('class' => 'col-sm-2 control-label')) }}
			    <div class="col-sm-10">
			      {{ Form::textarea('body', null, array('class' => 'form-control', 'rows' => '5', 'placeholder' => 'Input your thoughts here...')) }}
			      {{ $errors->has('body') ? $errors->first('body', '<span class="help-block">:message</span>') : '' }}
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox"> Save & Publish (Saves as Draft by default)
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      {{ Form::submit('Post', array('class' => 'btn btn-success')) }}
			    </div>
			  </div>
			{{ Form::close() }}
			<p><a href="{{{ action('PostsController@index') }}}">Index</a></p>
		</div>
	</div>
@stop
