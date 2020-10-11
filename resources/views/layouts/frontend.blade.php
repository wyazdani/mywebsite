<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{url('images/favico.ico')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key={!! env('GOOGLE_MAP_API_KEY') !!}&libraries=drawing,places"></script>
    @yield('title')
    <link href="{!! url('css/bootstrap.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! url('css/base.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! url('css/main.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! url('css/owl.carousel.css') !!}" rel="stylesheet"  media="all">
    <link href="{!! url('css/owl.theme.css') !!}" rel="stylesheet"  media="all">
    <link href="{!! url('css/magnific-popup.css') !!}" type="text/css" rel="stylesheet" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,300,600%7CRoboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
    <link href="{!! url('css/fontello.css') !!}" rel="stylesheet" type="text/css"  media="all">
</head>
<body>

<script type="text/javascript" src="{{url('js/popper.js"')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/main.js')}}"></script>
<script type="text/javascript" src="{{url('js/slick.js')}}"></script>
@yield('scripts')

</body>
</html>
