<!DOCTYPE html>
<html>
<head>

    <!-- Title -->
    <title>Ecclesia - @yield('title') </title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="{{url("assets/plugins/pace-master/themes/blue/pace-theme-flash.css")}}" rel="stylesheet"/>
    <link href="{{url("assets/plugins/uniform/css/uniform.default.min.css")}}" rel="stylesheet"/>
    <link href="{{url("assets/plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/fontawesome/css/font-awesome.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/line-icons/simple-line-icons.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/waves/waves.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/switchery/switchery.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/3d-bold-navigation/css/style.css")}}" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="{{url("assets/css/modern.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/css/themes/purple.css")}}" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/css/custom.css")}}" rel="stylesheet" type="text/css"/>

    <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="page-login">


<main class="page-content">
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3 center">
                    <div class="login-box">
                        @yield('content')
                        <p class="text-center m-t-xs text-sm">2015 &copy; Made by Enthronement Tech.</p>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
    </div><!-- Page Inner -->
</main><!-- Page Content -->


<!-- Javascripts -->
<script src="{{url("assets/plugins/jquery/jquery-2.1.4.min.js")}}"></script>
<script src="{{url("assets/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<script src="{{url("assets/plugins/pace-master/pace.min.js")}}"></script>
<script src="{{url("assets/plugins/jquery-blockui/jquery.blockui.js")}}"></script>
<script src="{{url("assets/plugins/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{url("assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<script src="{{url("assets/plugins/switchery/switchery.min.js")}}"></script>
<script src="{{url("assets/plugins/uniform/jquery.uniform.min.js")}}"></script>
<script src="{{url("assets/plugins/offcanvasmenueffects/js/classie.js")}}"></script>
<script src="{{url("assets/plugins/waves/waves.min.js")}}"></script>
<script src="{{url("assets/js/modern.min.js")}}"></script>

</body>
</html>

