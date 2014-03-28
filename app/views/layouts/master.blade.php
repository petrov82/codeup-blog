
<body>
    
</body>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title> @yield('title') </title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template 
    <link href="theme.css" rel="stylesheet">-->

    @yield('top-script')

    <style type="text/css">
        #maincontent {
          margin-top: 50px;
          margin-bottom: 50px;
        }

        #features {
          margin-top: 50px;
        }
    </style>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body role="document">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{{ action('HomeController@showWelcome') }}}">Peter J. Rhodes</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
            <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
            <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div class="container-fluid" id="maincontent">

  @if (Session::has('successMessage'))
    <div class="alert alert-success fade in out">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4>{{{ Session::get('successMessage') }}}</h4>
    </div>
@endif
@if (Session::has('errorMessage'))
    <div class="alert alert-danger fade in out">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4>{{{ Session::get('errorMessage') }}}</h4>
    </div>
@endif

		@yield('content')

</div>

 <!-- FOOTER -->
    <div class="container">
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <div style="font-family: monospace;" >&copy; 2014 Peter James Rhodes. All Rights Reserved &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </div>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/assets/js/docs.min.js"></script>
    <script type="text/javascript">$(".alert").alert('close')</script>
    @yield('bottom-script')
  </body>
</html>
