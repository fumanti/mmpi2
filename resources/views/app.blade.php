<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>web mmpi2</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<!-- <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> -->
	<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" type="text/css" />
	<!--<link href="https://raw.githubusercontent.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css" />-->
	<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="{{ asset('/favicon.ico') }}">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			@if (Auth::Check())
 				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand strong" style="font" href="{{ url('/') }}">
						&nbsp;
						<div class="label label-primary label-inverted">M</div>
						<div class="label label-primary label-inverted">M</div>
						<div class="label label-primary label-inverted">P</div>
						<div class="label label-primary label-inverted">I</div>
						&nbsp;
						<div class="label label-default label-inverted" style="border-radius:50%">2</div>&nbsp;&nbsp;<b><span style="font-size:1.1em;vertical-align:bottom;color:#000">RF</span></b>
					</a>
					<!--<a class="navbar-brand strong" href="javascript:void(0)">minnesota multiphasic personality inventory 2</a>-->
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<!-- <ul class="nav navbar-nav">
						<li style="font-size:1.4em;text-shadow: 0 1px 0 #ffffff;">minnesota multiphasic personality inventory 2</li>
					</ul> -->
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-user"></i> &nbsp; {{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<!-- <li><a href="{{ url('/auth/register') }}"><i class="fa fa-users"> </i> Registra utente</a></li> -->
								@if(Auth::user()->admin)<li><a href="{{ url('/auth/users') }}"><i class="fa fa-users"> </i>&nbsp;Gestione utenti</a></li>@endif
								<li><a href="{{ url('/auth/logout') }}"><i class="fa fa-sign-out"> </i>&nbsp;Esci </a></li>
							</ul>
						</li>
					</ul>
				</div>
			@endif
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
	<script type="text/javascript" src="../../js/locales.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" />
	<script>
	  $(function(){
		$('[data-toggle="tooltip"]').tooltip();
	  });
	  $(document).ready(function(){
		$('.select2').select2({minimumResultsForSearch: Infinity});
	  });
	 $(document.body).on('click', '.dropdown-menu li', function( event ) {
  		$(event.target).closest('.btn-group').find('[data-bind="label"]').text($(event.target).text()); 
	  });

	</script>
	@yield('footer')
</body>
</html>
