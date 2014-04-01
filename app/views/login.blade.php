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
      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
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
