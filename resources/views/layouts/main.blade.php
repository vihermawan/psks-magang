<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aplikasi PSKS</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/layout_3/LTR/default/full/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/layout_3/LTR/default/full/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/layout_3/LTR/default/full/assets/css/layout.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/layout_3/LTR/default/full/assets/css/components.min.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/template/layout_3/LTR/default/full/ssets/css/colors.min.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script src="{{url('/')}}/template/global_assets/js/main/jquery.min.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/main/bootstrap.bundle.min.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/loaders/blockui.min.js"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script src="{{url('/')}}/template/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/ui/moment/moment.min.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/pickers/daterangepicker.js"></script>

  <script src="{{url('/')}}/template/layout_3/LTR/default/full/assets/js/app.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/demo_pages/dashboard.js"></script>
  <!-- /theme JS files -->

    @yield('js')
</head>

<body>

 <!-- Main navbar -->
 <div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand wmin-200">
      <div class="d-inline-block d-flex align-items-center">
        <h6 class="font-weight-bold mb-0">SISTEM INFORMASI PSKS</h6>
      </div>
    </div>

    <div class="d-md-none">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
        <i class="icon-tree5"></i>
      </button>
      <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
        <i class="icon-paragraph-justify3"></i>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
            <i class="icon-paragraph-justify3"></i>
          </a>
      </ul>

      <span class="badge bg-success-400 ml-md-auto mr-md-3">PSKS</span>

      <ul class="navbar-nav">
        <li class="nav-item dropdown dropdown-user">
          <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
            <img src="{{url('/')}}/limitless/Template/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
            <span>{{ Auth::user()->NamaPSKS }}</span>
          </a>
          
          <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
            <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
            <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="icon-switch2"></i> Logout </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- /main navbar -->


  <!-- Page content -->
    <div class="page-content">

      @section('sidebar')
        @include('layouts.sidebar')
      @show

      <!-- Main content -->
      <div class="content-wrapper">


        <!-- content area -->
        @yield('content')
        <!-- /content area -->


      </div>
      <!-- /main content -->

    </div>
    <!-- /page content -->
    @yield('script')


  <!-- Footer -->
  <div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
      <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
        <i class="icon-unfold mr-2"></i>
        Footer
      </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
      <span class="navbar-text">
          &copy; 2019. <a href="#">Pusdatin Kemensos</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">PSKS</a>
      </span>

      <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
        <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
        <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
      </ul>
    </div>
  </div>
  <!-- /footer -->
    

</body>
</html>
