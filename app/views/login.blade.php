@extends('layouts.master')

@section('title')
  Login
@stop

@section('top-script')
  <link href="/css/signin.css" rel="stylesheet">
@stop

@section('content')

    <div class="container">

      {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
        <h2 class="form-signin-heading">Please sign in</h2>
        {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email address', 'required' => 'required', 'autofocus' => 'autofocus')) }}
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required',)) }}
        {{ $errors->has('title') ? $errors->first('title', '<span class="help-block">:message</span>') : '' }}

        <label class="checkbox">
          <input name="remember" type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      {{ Form::close() }}

@stop





    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
s
