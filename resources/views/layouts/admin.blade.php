<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/img/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <title>{{ $title }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/fontawesome.css") }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/icofont.css") }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/themify.css") }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/flag-icon.css") }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/feather-icon.css") }}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/bootstrap.css") }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style.css") }}">
    <link id="color" rel="stylesheet" href="{{ asset("assets/css/color-1.css") }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/responsive.css") }}">
    
  </head>
  <body>
    <div id="pageWrapper" class="page-wrapper null compact-wrapper">
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <form class="form-inline search-full">&nbsp;</form>
                <div class="main-header-left">&nbsp;</div>
                <div class="left-menu-header col horizontal-wrapper pl-0">&nbsp;</div>
                <div class="nav-right col-8 pull-right right-menu">
                    <ul class="nav-menus">
                        <li class="profile-nav onhover-dropdown p-0">
                            <div class="media profile-media">
                                Admin
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li id="logout"><i data-feather="log-in"> </i><span>Logout</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-body-wrapper null sidebar-icon">
            <header class="main-nav">
                <div class="logo-wrapper">
                    <a href="{{ url("admin") }}">Logo</a>
                </div>
                <nav class="main-navbar">
                    <div id="mainnav">
                        <ul class="nav-menu custom-scrollbar">
                            <li class="back-btn"><a href="{{ url("admin") }}">
                                <img class="img-fluid" src="{{ asset("images/logo/logo-icon.png") }}" alt=""></a></li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav {{ (request()->segment(2)=="")?"active":"" }}" href="{{ url("admin") }}">
                                <i data-feather="git-pull-request"> </i><span>Dashboard </span></a>
                            </li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav {{ (request()->segment(2)=="order")?"active":"" }}" href="{{ url("admin/order") }}"><i data-feather="git-pull-request"> </i><span>Order</span></a>
                            </li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav {{ (request()->segment(2)=="brand")?"active":"" }}" href="{{ url("admin/brand") }}"><i data-feather="git-pull-request"> </i><span>Brand</span></a>
                            </li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav {{ (request()->segment(2)=="shipping")?"active":"" }}" href="{{ url("admin/shipping") }}"><i data-feather="git-pull-request"> </i><span>Shipping</span></a>
                            </li>
                            <li class="dropdown"><a class="nav-link menu-title link-nav {{ (request()->segment(2)=="user")?"active":"" }}" href="{{ url("admin/user") }}"><i data-feather="git-pull-request"> </i><span>User</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="page-body">
                
                @yield('content')

            </div>
            <footer class="footer"></footer>
        </div>
    </div>
    <form method="post" id="form_logout" action="{{ route("admin.logout") }}">
        @csrf
    </form>
    <!-- latest jquery-->
    <script src="{{ asset("assets/js/jquery-3.5.1.min.js") }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset("assets/js/popper.min.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap.js") }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset("assets/js/feather.min.js") }}"></script>
    <script src="{{ asset("assets/js/feather-icon.js") }}"></script>
    <!-- Sidebar jquery-->
    <!-- <script src="{{ asset("assets/js/sidebar-menu.js") }}"></script> -->
    <script src="{{ asset("assets/js/config.js") }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset("assets/js/tooltip-init.js") }}"></script>
    <!-- Plugins JS Ends-->
    <script>
    $(document).ready(function(){
        $("#logout").click(function(){
            $("#form_logout").submit();
        })
        $(".delete").submit(function(){
            var r=confirm("Delete this record?");
            return r;
        })
    });
    </script>
  </body>
  </html>