<!DOCTYPE html>
<html>
  <head>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <link rel="icon" href="{{ url('public/img/tabIcon.png') }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insurance</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ url('public/css/bootstrap.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ url('public/css/all.min.css') }}">


    <!-- Fontastic Custom icon font-->
    <!-- <link rel="stylesheet" href="public/css/fontastic.css"> -->
    <link rel="stylesheet" href="{{ url('public/superAdmin/css/fontastic.css') }}">

    <!-- Google fonts - Roboto -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> -->
    <!-- jQuery Circle-->
    <!-- <link rel="stylesheet" href="public/css/grasp_mobile_progress_circle-1.0.0.min.css"> -->
    <link rel="stylesheet" href="{{ url('public/superAdmin/css/grasp_mobile_progress_circle-1.0.0.min.css') }}">

    <!-- Custom Scrollbar-->
    <!-- <link rel="stylesheet" href="public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->
    <link rel="stylesheet" href="{{ url('public/superAdmin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">

    <!-- theme stylesheet-->
    <!-- <link rel="stylesheet" href="public/css/style.default.css" id="theme-stylesheet"> -->
    <link rel="stylesheet" href="{{ url('public/superAdmin/css/style.default.css') }}" id="theme-stylesheet">

    <!-- Color Palette stylesheet-->
    <!-- <link rel="stylesheet" href="public/css/colorPalette.css"> -->
    <link rel="stylesheet" href="{{ url('public/superAdmin/css/colorPalette.css') }}">

    <!-- Custom stylesheet - for your changes-->
    <!-- <link rel="stylesheet" href="public/css/custom.css"> -->
    <link rel="stylesheet" href="{{ url('public/superAdmin/css/custom.css') }}">

    @yield('css')
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="public/img/favicon.ico"> -->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>

  <nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img src="{{url('public/superAdmin/img/SuperAdmin.png')}}" alt="person"
            class="img-fluid rounded-circle">
          <h2 class="h5">shimaa</h2><span>Insurance</span>
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
        <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong
              class="color5">In</strong><strong class="color3">Su</strong></a></div>
      </div>
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading text-center">Main</h5>
        <hr class="my-0">
        <ul id="side-main-menu" class="side-menu list-unstyled">
          <!-- Home-->
          <li><a href=""> <i class="fas fa-home"></i>Home</a></li>
          <!-- Add Partener -->

          <!-- Add Medical Data -->
          <li><a href="#addpartener" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-users"></i>Users</a>
            <ul id="addpartener" class="collapse list-unstyled ">
              <li><a href="{{ route('users.index') }}"><i class="fas fa-users"></i>Users</a></li>
              <li><a href="{{ route('roles.index') }}"><i class="fas fa-user-tag"></i>Roles</a></li>


            </ul>
          </li>
          <!-- Add Partener -->
          <li><a href="{{ route('contract.index') }}"><i class="fas fa-file-contract"></i>Contracts</a></li>
          <!-- Delete Partener -->
          <li><a href="{{ route('relatives_type.index') }}"><i class="fab fa-creative-commons-sampling-plus"></i>Relatives Type</a></li>
          <li><a href="{{ route('insurance_type.index') }}"><i class="fas fa-house-damage"></i>Insurance Type</a></li>
          <li><a href="{{ route('evaluation_type.index') }}"><i class="fas fa-house-damage"></i>Evaluation Type</a></li>
          <li><a href="{{ route('insurance_grade.index') }}"><i class="fas fa-house-damage"></i>Insurance Grade</a></li>


          <li><a href="{{ route('employee.index') }}"><i class="fas fa-house-damage"></i>Employee</a></li>



        </ul>
      </div>


  </nav>
  <div class="page">
    <!-- navbar-->
    <header class="header">
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-holder d-flex align-items-center justify-content-between">
            <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="fas fa-bars"></i></a><a
                href="" class="navbar-brand">
                <div class="brand-text d-none d-md-inline-block"><strong class="color4">Insurance</strong></div>
              </a></div>
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">



              <!-- Log out-->


              <li class="nav-item"><a href="{{ route('login') }}" class="nav-link logout"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
              > <span class="d-none d-sm-inline-block">Logout</span><i class="fas fa-sign-out-alt"></i></a>
              </li>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    @yield('content')

    <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Insurance &copy; 2021</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="" class="external">Insurance Team</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="{{ url('public/superAdmin/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
    <!-- <script src="public/vendor/jquery/jquery-3.4.1.min.js"></script> -->

    <script src="{{ url('public/superAdmin/vendor/popper.js/popper.min.js') }}"></script>
    <!-- <script src="public/vendor/popper.js/popper.min.js"> </script> -->

    <script src="{{ url('public/superAdmin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script> -->

    <script src="{{ url('public/superAdmin/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <!-- <script src="public/js/grasp_mobile_progress_circle-1.0.0.min.js"></script> -->

    <script src="{{ url('public/superAdmin/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <!-- <script src="public/vendor/jquery.cookie/jquery.cookie.js"> </script> -->

    <script src="{{ url('public/superAdmin/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- <script src="public/vendor/chart.js/Chart.min.js"></script> -->

    <script src="{{ url('public/superAdmin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- <script src="public/vendor/jquery-validation/jquery.validate.min.js"></script> -->

    <script src="{{ url('public/superAdmin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- <script src="public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->

    <!-- <script src="{{ url('/superAdmin/js/charts-home.js') }}"></script> -->
    <!-- <script src="public/js/charts-home.js"></script> -->
    <!-- Main File-->
    <script src="{{ url('public/superAdmin/js/front.js') }}"></script>
    <!-- <script src="public/js/front.js"></script> -->
    @yield('js')
  </body>
</html>
