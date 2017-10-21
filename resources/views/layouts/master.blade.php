<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/jquery.fullPage.css')}}" rel="stylesheet">

    @yield('css')
</head>
<body >
<div id="fullpage">


    @yield('content')
</div>


<!-- Scripts -->

{{Html::script('assets/global/plugins/jquery.min.js')}}

{{Html::script('js/jquery.easings.min.js')}}
{{Html::script('js/jquery.fullPage.js')}}
@yield('js')
</body>

</html>
