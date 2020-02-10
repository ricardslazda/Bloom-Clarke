<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{getenv('APP_ROOT')}}/images/logo.png">
    <link href="{{getenv('APP_ROOT')}}/css/all.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7bf7450cb1.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.37.2/maps/maps.css'/>
    <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.37.2/maps/maps-web.min.js'></script>
</head>
<body data-page-id="@yield('page-id')" data-active-page="@yield('active-page')">
@include('components.navigation')
@yield('content')
@include('components.footer')
<script src="{{getenv('APP_ROOT')}}/js/all.js"></script>
</body>
</html>