<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Handmade Hatchling</title>
    {{--<link href="{{ elixir('css/style.css') }}" rel="stylesheet">--}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    @yield('ex-styles')
    @include('partials._adminStyle')

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
        @include('partials._adminNav')
    </header>

    <main role="main" class="container-fluid">
        <div class="row">
            @include('partials._adminSidebar')
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                @yield('content')
            </div>
        </div> <!-- /.row -->
    </main>
</div> <!-- /.wrapper -->

{{--<footer>&copy; Jennifer Parker 2015</footer>--}}
<!-- Scripts -->
<script src="/js/main.js"></script>

<script>
    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
</script>
@yield('footer')
</body>
</html>