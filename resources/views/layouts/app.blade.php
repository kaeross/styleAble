<!DOCTYPE html>
<html lang="en">
<head>
    <title>Styleable</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs.">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib">
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
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- waves js-->
<script src="{{asset('js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('js/jquery.slimscroll.js')}}"></script>
<!-- Float Chart js
<script src="{{asset('js/jquery.flot.js')}}"></script>
<script src="{{asset('js/jquery.flot.categories.js')}}"></script>
<script src="{{asset('js/curvedLines.js')}}"></script>
<script src="{{asset('js/jquery.flot.tooltip.min.js')}}"></script> -->
<!-- Chartlist charts
<script src="{{asset('js/chartist.js')}}"></script> -->
<!-- amchart js
<script src="{{asset('js/amcharts.js')}}"></script>
<script src="{{asset('js/serial.js')}}"></script>
<script src="{{asset('js/light.js')}}"></script>-->
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
