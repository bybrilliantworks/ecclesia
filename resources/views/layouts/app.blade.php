<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ecclesia - @yield('title')</title>

    <link href="{{url("assets/plugins/pace-master/themes/blue/pace-theme-flash.css")}}" rel="stylesheet"/>
    <link href="{{url("assets/plugins/uniform/css/uniform.default.min.css")}}" rel="stylesheet"/>
    <link href="{{url("assets/plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/fontawesome/css/font-awesome.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/line-icons/simple-line-icons.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/waves/waves.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/switchery/switchery.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/3d-bold-navigation/css/style.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/slidepushmenus/css/component.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/weather-icons-master/css/weather-icons.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/metrojs/MetroJs.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/plugins/toastr/toastr.min.css")}}" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="{{url("assets/css/modern.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/css/themes/purple.css")}}" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/css/custom.css")}}" rel="stylesheet" type="text/css"/>

    <script src="{{url("assets/plugins/3d-bold-navigation/js/modernizr.js")}}"></script>
    <script src="{{url("assets/plugins/offcanvasmenueffects/js/snap.svg-min.js")}}"></script>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    @yield('styles')

</head>
<body class="page-header-fixed page-sidebar-fixed">
    <div class="overlay"></div>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
        <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
        <div class="slimscroll">
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
            <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
        </div>
    </nav>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
        <div class="slimscroll chat">
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Hi There!
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Hi! How are you?
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Fine! do you like my project?
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Yes, It's clean and creative, good job!
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Thanks, I tried!
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Good luck with your sales!
                </div>
            </div>
        </div>
        <div class="chat-write">
            <form class="form-horizontal" action="javascript:void(0);">
                <input type="text" class="form-control" placeholder="Say something">
            </form>
        </div>
    </nav>
    <div class="menu-wrap">
        <nav class="profile-menu">
            <div class="profile"><img src="{{asset('assets/images/profile-menu-image.png')}}" width="60" alt="{{Auth::user()->name}}"/><span>{{Auth::user()->name}}</span></div>
            <div class="profile-menu-list">
                <a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                <a href="{{url('members')}}"><i class="fa fa-users"></i><span>Members</span></a>
                <a href="{{url('members')}}"><i class="fa fa-group"></i><span>Groups</span></a>

            </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
    <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                    </span>
        </div><!-- Input Group -->
    </form><!-- Search Form -->
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="logo-box">
                    <a href="{{url("/")}}" class="logo-text"><span>Ecclesia</span></a>
                </div><!-- Logo Box -->
                <div class="search-button">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                </div>
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                            </li>
                            <li>
                                <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <span class="user-name">Create New<i class="fa fa-angle-down"></i></span>
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="{{url('members/create')}}"><i class="fa fa-user"></i>Member</a></li>
                                    <li role="presentation"><a href="{{url('events/create')}}"><i class="fa fa-calendar"></i>Event</a></li>
                                    <li role="presentation"><a href="{{url('projects/create')}}"><i class="fa fa-cubes"></i>Project</a></li>
                                    <li role="presentation"><a href="{{url('groups/create')}}"><i class="fa fa-group"></i>Group</a></li>
                                    <li role="presentation"><a href="{{url('assets/create')}}"><i class="fa fa-cogs"></i>Asset</a></li>
                                    <li role="presentation"><a href="{{url('users/create')}}"><i class="fa fa-user-md"></i>User</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <span class="user-name">{{Auth::user()->first_name}}<i class="fa fa-angle-down"></i></span>
                                    <img class="img-circle avatar" src="{{asset('assets/images/profile-menu-image.png')}}" width="40" height="40" alt="">
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="{{url('profile')}}"><i class="fa fa-user"></i>Profile</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a href="{{url('logout')}}"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url("logout")}}" class="log-out waves-effect waves-button waves-classic">
                                    <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                                    <i class="fa fa-comments"></i>
                                </a>
                            </li>
                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->

    @include('partials.sidebar')

    @yield('content')
    
    </main><!-- Page Content -->

    @include('partials.cd-nav')
    <div class="cd-overlay"></div>

    <script src="{{url("assets/plugins/jquery/jquery-2.1.4.min.js")}}"></script>
    <script src="{{url("assets/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    <script src="{{url("assets/plugins/pace-master/pace.min.js")}}"></script>
    <script src="{{url("assets/plugins/jquery-blockui/jquery.blockui.js")}}"></script>
    <script src="{{url("assets/plugins/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{url("assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
    <script src="{{url("assets/plugins/switchery/switchery.min.js")}}"></script>
    <script src="{{url("assets/plugins/uniform/jquery.uniform.min.js")}}"></script>
    <script src="{{url("assets/plugins/offcanvasmenueffects/js/classie.js")}}"></script>
    <script src="{{url("assets/plugins/offcanvasmenueffects/js/main.js")}}"></script>
    <script src="{{url("assets/plugins/waves/waves.min.js")}}"></script>
    <script src="{{url("assets/plugins/3d-bold-navigation/js/main.js")}}"></script>
    <script src="{{url("assets/plugins/waypoints/jquery.waypoints.min.js")}}"></script>
    <script src="{{url("assets/plugins/jquery-counterup/jquery.counterup.min.js")}}"></script>

    @yield('scripts')
      {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
