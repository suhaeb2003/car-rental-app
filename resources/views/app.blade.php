<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--------- Css link --------->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!--------- Bootsrap link --------->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.navber')
   
    @yield('content')
   
</body>
</html>