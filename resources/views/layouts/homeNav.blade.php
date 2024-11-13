<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>creARTive-Connect</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>


<!--header-->
<header class="clearfix mb-5 main-header" role="header">
    <div class="logo">
        <a href="/"><em>creARTive-Connect</em> DECENTRALIZED CONTENT SHARING PLATFORM</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
        <ul class="main-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/content" class="external">Content uploads</a></li>

            @if (Auth::check())
                <li><a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a></li>
            @else
                <li><a href="/register" class="external">Register</a></li>
                <li><a href="/login" class="external">Login</a></li>
            @endif
        </ul>
    </nav>
</header>
