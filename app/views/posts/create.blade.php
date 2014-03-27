@extends('layouts.master')

@section('title')
New Post
 @stop

@section('content')
 	<div class="container-fluid">
 		<div class=container>
 			<h1>Create a new Post<small> /*all fields required*/</small></h1>
 			<form class="form-horizontal" role="form" action="{{{ action('PostsController@store') }}}" method="POST">
			  <div class="form-group">
			    <label for="title" class="col-sm-2 control-label">Title</label>
			    <div class="col-sm-10">
			      <input type="title" class="form-control" id="title" name="title" placeholder="Title" value="{{{ Input::old('title') }}}">
					{{ $errors->has('title') ? $errors->first('title', '<span class="help-block">:message</span>') : '' }}
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="content" class="col-sm-2 control-label">Body</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" rows="5" type="text" class="form-control" id="body" name="body" placeholder="Input your thoughts here...">{{{ Input::old('body') }}}</textarea>
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
			      <button type="submit" class="btn btn-success">Post</button>
			    </div>
			  </div>
			</form>
				<p><a href="{{{ action('PostsController@index')}}}">Return to posts index</a></p>

 		</div>
 	</div>
@stop
