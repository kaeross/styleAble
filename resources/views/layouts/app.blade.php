<!DOCTYPE html>
<html lang="en">
<head>
    <title>Styleable</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Admindek">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="{{asset('css/css_1.css')}}" rel="stylesheet">
    <link href="{{asset('css/css.css')}}" rel="stylesheet">
    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('css/waves.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/component.css')}}" type="text/css"
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/feather.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/icofont.css')}}">
    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{asset('css/chartist.css')}}" type="text/css" media="all">
    <!-- Prettify.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/prettify.css')}}">
    <!-- Style.css -->
    @yield('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/widget.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

</head>
<body>
<div id="app">

    @yield('content')

</div>
<!-- Required Jquery -->
<script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<!-- waves js-->
<script src="{{asset('js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('js/jquery.slimscroll.js')}}"></script>
<!-- Float Chart js
<script src="{{asset('js/charts/jquery.flot.js')}}"></script>
<script src="{{asset('js/charts/jquery.flot.categories.js')}}"></script>
<script src="{{asset('js/charts/curvedLines.js')}}"></script>
<script src="{{asset('js/charts/jquery.flot.tooltip.min.js')}}"></script> -->
<!-- Chartlist charts
<script src="{{asset('js/charts/chartist.js')}}"></script> -->
<!-- amchart js
<script src="{{asset('js/charts/amcharts.js')}}"></script>
<script src="{{asset('js/charts/serial.js')}}"></script>
<script src="{{asset('js/charts/light.js')}}"></script>-->
<!-- Code block prettify js -->
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<!-- Custom js -->
@yield('scripts')
<script src="{{asset('js/pcoded.min.js')}}"></script>
<script src="{{asset('js/vertical-layout.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('js/custom-dashboard.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('js/script.min.js')}}"></script>
</body>

</html>
