<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Handmade Hatchling</title>
	<link href="{{ elixir('css/style.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
@yield('body-class')
	<div class="wrapper">
		<header>
		    <div class="site__branding">
		        <h1><a href="/">Handmade Hatchling</a></h1>
		        <h2>Where <em>handmade</em> is always better!</h2>
		    </div>
		    @include('partials._nav')
		</header>

		<main role="main" class="home main">
	        @include('flash::message')
	        {{--@include('partials.flash')--}}

			@yield('content')
		</main>
	</div> <!-- /.wrapper -->

	<footer>&copy; Jennifer Parker 2015</footer>
	<!-- Scripts -->
	<script src="/js/main.js"></script>

    <script>
		$('div.alert').not('.alert-important').delay(3000).slideUp(300);
	</script>
	@yield('footer')
</body>
</html>
