<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peter J. Rhodes, Web Developer</title>
    <link href="/css/journal-bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/css/cover.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<span>
		Hello!
	</span>
	<div class="welcome">
		<img src="img/profile.jpeg" class="img-rounded">
				<h1 style="color:#AAA">Welcome.</h1>
				<div style="margin-top:10px">
					<span>
					<button href="https://twitter.com/petrov82" style="color:#AAA" class="btn-info" title="@petrov82"><i class="fa fa-twitter fa-2x"></i></button>&nbsp;&nbsp;
					<button href="https://github.com/petrov82" style="color:#AAA" class="btn-info" title="/petrov82"><i class="fa fa-github-alt fa-2x"></i></button>&nbsp;&nbsp;
					<button href="https://peterrhodes.tumblr.com" style="color:#AAA" class="btn-info" title="fun stuff!"><i class="fa fa-tumblr fa-2x"></i></button>
				</span>
			</div>
			<div><p></p></div>
			<div>
				<span>
					<a href="{{{ action('PostsController@index') }}}">Blog&nbsp;|&nbsp;</a>
					<a href="{{{ action('HomeController@showResume') }}}">Resumé&nbsp;|&nbsp;</a>
					<a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
				</span>
			</div>
	</div>
</body>
</html>
