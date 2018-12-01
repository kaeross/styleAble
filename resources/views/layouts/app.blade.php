<!DOCTYPE html>
<html lang="en">
<head>
    <title>Styleable</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs.">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="{{asset('css/css_1.css')}}" rel="stylesheet">
    <link href="{{asset('css/css.css')}}" rel="stylesheet">
    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('css/waves.min.css')}}" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/feather.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome-n.min.css')}}">
    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{asset('css/chartist.css')}}" type="text/css" media="all">
    <!-- Prettify.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/prettify.css')}}">
    <!-- Style.css -->
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
<!-- waves js -->
<script src="{{asset('js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('js/jquery.slimscroll.js')}}"></script>
<!-- Float Chart js -->
<script src="{{asset('js/jquery.flot.js')}}"></script>
<script src="{{asset('js/jquery.flot.categories.js')}}"></script>
<script src="{{asset('js/curvedLines.js')}}"></script>
<script src="{{asset('js/jquery.flot.tooltip.min.js')}}"></script>
<!-- Chartlist charts -->
<script src="{{asset('js/chartist.js')}}"></script>
<!-- amchart js -->
<script src="{{asset('js/amcharts.js')}}"></script>
<script src="{{asset('js/serial.js')}}"></script>
<script src="{{asset('js/light.js')}}"></script>
<!-- Code block prettify js -->
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<!-- Custom js -->
<script src="{{asset('js/pcoded.min.js')}}"></script>
<script src="{{asset('js/vertical-layout.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom-dashboard.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.min.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="js_1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
