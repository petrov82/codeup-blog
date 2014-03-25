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
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="content" class="col-sm-2 control-label">Body</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" rows="5" type="text" class="form-control" id="content" name="content" placeholder="Input your thoughts here...">{{{ Input::old('content') }}}</textarea>
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
 		</div>
 	</div>
@stop
