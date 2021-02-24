<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="{{asset('template_admin')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="{{asset('template_admin')}}/assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- morris chart -->
    <link href="{{asset('template_admin')}}/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('template_admin')}}/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="{{asset('template_admin')}}/assets/css/material_style.css">
	<!-- animation -->
	<link href="{{asset('template_admin')}}/assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Theme Styles -->
    <link href="{{asset('template_admin')}}/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template_admin')}}/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template_admin')}}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('template_admin')}}/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="{{asset('template_admin')}}/assets/img/favicon.ico" /> 
    <title>@yield('tittle')</title>
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-white">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                    <img alt="" src="{{asset('template_admin')}}/assets/img/logo.png">
                    <span class="logo-default" >Admin</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler font-size-23"><i class="fa fa-bars"></i></a></li>
				</ul>
                <ul class="nav navbar-nav navbar-left in">
                	<!-- start full screen button -->
                    <li><a href="javascript:;" class="fullscreen-click font-size-20"><i class="fa fa-arrows-alt"></i></a></li>
                    <!-- end full screen button -->
                </ul>
                <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn search-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="fa fa-search"></i>
                           </a>
                        </span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
               
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img src="{{asset('template_admin')}}/assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
	                                    <p> Marria</p>
	                                    <a title="Logout" href="login.html" ><i class="material-icons">power_settings_new</i></a>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="menu-heading">
			                	<span>-- Main</span>
			                </li>
	                        <li class="nav-item active">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
                                	<span class="arrow open"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item @yield('data_pernikahan')">
	                                    <a href="index.html" class="nav-link ">
	                                        <span class="title">Data pernikahan</span>
	                                        <span class="selected"></span>
	                                    </a>
	                                </li>
	                                <li class="nav-item @yield('data_user')">
	                                    <a href="dashboard2.html" class="nav-link ">
	                                        <span class="title">Data User Admin</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
			<!-- start page content -->
            @yield('content')
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2021 &copy; by Bimasetiaaji
            <a href="" target="_top" class="makerCss">Redstartheme</a>
            </div>
            <div class="scroll-to-top">
                <i class="material-icons">eject</i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="{{asset('template_admin')}}/assets/plugins/jquery/jquery.min.js" ></script>
    @yield('defaault_foto')
    <script src="{{asset('template_admin')}}/assets/plugins/popper/popper.min.js" ></script>
    <script src="{{asset('template_admin')}}/assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="{{asset('template_admin')}}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="{{asset('template_admin')}}/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="{{asset('template_admin')}}/assets/plugins/sparkline/jquery.sparkline.min.js" ></script>
	<script src="{{asset('template_admin')}}/assets/js/pages/sparkline/sparkline-data.js" ></script>
    <!-- Common js-->
	<script src="{{asset('template_admin')}}/assets/js/app.js" ></script>
    <script src="{{asset('template_admin')}}/assets/js/layout.js" ></script>
    <script src="{{asset('template_admin')}}/assets/js/theme-color.js" ></script>
    <!-- material -->
    <script src="{{asset('template_admin')}}/assets/plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="{{asset('template_admin')}}/assets/js/pages/ui/animations.js" ></script>
    <!-- morris chart -->
    <script src="{{asset('template_admin')}}/assets/plugins/morris/morris.min.js" ></script>
    <script src="{{asset('template_admin')}}/assets/plugins/morris/raphael-min.js" ></script>
    <script src="{{asset('template_admin')}}/assets/js/pages/chart/morris/morris_home_data.js" ></script>
    <!-- google map -->
    <script src="{{asset('template_admin')}}/assets/plugins/modernizr/modernizr.min.js" ></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtPIcsjNx-GEuJDPmiXOVyB3G9k1eulX0&callback=initMap" async defer></script>
    <script src="{{asset('template_admin')}}/assets/js/pages/map/gmap-home.js" ></script>
    <!-- end js include path -->
  </body>
</html>