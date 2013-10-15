<!doctype html>

<!--[if lt IE 7]> <html class='no-js ie6 oldie' lang='en'> <![endif]-->
<!--[if IE 7]>      <html class='no-js ie7 oldie' lang='en'> <![endif]-->
<!--[if IE 8]>      <html class='no-js ie8 oldie' lang='en'> <![endif]-->
<!--[if gt IE 8]><!--> <html class='no-js' lang='en'> <!--<![endif]-->

<head>

    <meta charset=UTF-8>

    <title>{{ $data['title'] }}</title>

    <link rel='stylesheet' href='{{ URL::to('assets/css/laravel4.min.css') }}'>
    {{-- <meta name='viewport' content='width=device-width,initial-scale=1'> --}}

    <!--[if lt IE 9]>
    <script src='{{ URL::to('/assets/js/system/html5.js') }}'></script>
    <![endif]-->

    <script src='//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
    <script src='{{ URL::to('assets/js/autoloads.min.js') }}'></script>

</head>
