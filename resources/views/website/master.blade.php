<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce  @yield('title')</title>
    @include('website.include.style')
</head>
<body>
<header>
@include('website.include.header')
</header>
@yield('content')
@include('website.include.footer')
@include('website.include.script')
</body>
</html>
