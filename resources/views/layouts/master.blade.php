{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<title>Laravel</title>--}}

    {{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

    {{--<!-- Styles -->--}}

{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
    {{--@yield('content')--}}
{{--</div>--}}
{{--@yield('footer')--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
        {{--////////////////////////////////////////////--}}
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
    {{--<meta name="description" content="">--}}
    {{--<meta name="author" content="">--}}
    {{--<link rel="icon" href="../../favicon.ico">--}}

    {{--<title>Album example for Bootstrap</title>--}}
    {{--<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">--}}

    {{--<!-- Bootstrap core CSS -->--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">--}}

    {{--<!-- Custom styles for this template -->--}}
    {{--<link href="css/album.css" rel="stylesheet">--}}
{{--</head>--}}

{{--<body>--}}

{{--<div class="collapse bg-inverse" id="navbarHeader">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-8 py-4">--}}
                {{--<h4 class="text-white">About</h4>--}}
                {{--<p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>--}}
            {{--</div>--}}
            {{--<div class="col-sm-4 py-4">--}}
                {{--<h4 class="text-white">Contact</h4>--}}
                {{--<ul class="list-unstyled">--}}
                    {{--<li><a href="#" class="text-white">Follow on Twitter</a></li>--}}
                    {{--<li><a href="#" class="text-white">Like on Facebook</a></li>--}}
                    {{--<li><a href="#" class="text-white">Email me</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@include('layouts.nav')--}}
{{--<div class="container">--}}
    {{--@yield('content')--}}
{{--</div>--}}


{{--@include('layouts.footer')--}}
{{--</body>--}}
{{--</html>--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    {{--<link href="{{ URL::asset('public/css')}}/blog.css" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}" />
</head>

<body>
@include('layouts.nav')

<div class="container">
    <div class="row">

    </div>
</div>
<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
</div>

<div class="container">

    <div class="row">
        @yield('content')
        @include('layouts.sidebar')

    </div><!-- /.row -->

</div><!-- /.container -->
@include('layouts.footer')
</body>
</html>