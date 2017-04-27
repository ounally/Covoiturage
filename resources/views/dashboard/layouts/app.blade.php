<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="fr"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon-32x32.png')}}" sizes="32x32">

    <title>Site @yield('title')</title>
    
    @yield('css')

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js')}}"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js')}}"></script>
    <![endif]-->

</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    
   @include('dashboard/layouts/header.header')

   @include('dashboard/layouts/aside.aside')

   @yield('content')

   @yield('js')

</body>
</html>