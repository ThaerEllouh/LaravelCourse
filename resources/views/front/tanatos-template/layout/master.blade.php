<!DOCTYPE html>
<html>
<head>
    <!--Basics HTML5-->
    <meta charset="utf-8">
    <meta name="author" content="thaer ellouh">
    <meta name="description" content="learn web design">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--first mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--My Code-->
    <title>@yield('titel', 'Tanatos-Template')</title>
    <link rel="stylesheet" href="{{URL:: asset('template3/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{URL:: asset('template3/css/normalize.css') }}">
    <link rel="stylesheet" href="{{URL:: asset('template3/css/style.css') }}">

    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
</head>
    
<body>
    
    @include('front/tanatos-template/include/header')

    @yield('content')
    
    @include('front/tanatos-template/include/footer')
    
    <script src="template3/js/jquery-3.1.1.min.js"></script>
    <script src="template3/js/jquery.nicescroll.min.js"></script>
    <script src="template3/js/custome.js"></script>
</body>
</html>

