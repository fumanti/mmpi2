<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>web-mmpi2</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/signin.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
	<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" >

	<link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="{{ asset('/favicon.ico') }}">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class="container">

    	@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong class="fa fa-meh-o fa-2x">&nbsp;Verificare i dati inseriti.</strong><br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li class="fa fa-exclamation-circle"> &nbsp;{{ $error }}</li><br>
					@endforeach
				</ul>
			</div>
		@endif

        <form class="form-signin" role="form" method="POST" action="{{ url('/auth/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <center><h2 class="form-signin-heading"><i class="fa fa-lock"></i> &nbsp; Area Riservata&nbsp; <i class="fa fa-lock"></i></h2></center>
            <label class="sr-only" for="email">E-mail</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" autofocus="" required="" placeholder="Indirizzo e-mail"></input>
            <br>
            <label class="sr-only" for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password" required="" placeholder="Password"></input>
            <div class="checkbox">
				<label><input type="checkbox" name="remember"> Ricorda password</label>
			</div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            <!-- <a class="btn btn-link" href="{{ url('/password/email') }}">Password dimenticata?</a> -->
        </form>
	</div>
        <!--

         /container 

        -->
        <!--

         IE10 viewport hack for Surface/desktop Windows 8 …

        -->
	<!-- Scripts -->
	<script>
	(function () {
	  'use strict';

	  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
	    var msViewportStyle = document.createElement('style')
	    msViewportStyle.appendChild(
	      document.createTextNode(
	        '@-ms-viewport{width:auto!important}'
	      )
	    )
	    document.querySelector('head').appendChild(msViewportStyle)
	  }

	})();
	</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>


