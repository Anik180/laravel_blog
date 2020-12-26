<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')-{{ config('app.name', 'Laravel') }}</title>

	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->
    <link rel="icon" href="{{asset('admin/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('admin/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('admin/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('admin/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('admin/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('admin/css/themes/all-themes.css')}}" rel="stylesheet" />
    
    <!-- toaster-alert -->
   <link rel="stylesheet" href="{{ asset('admin/plugins/toaster/toastr.css')}}">
   <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap-sweetalert/dist/sweetalert.css')}}">

	@stack('css')

</head>
<body class="theme-indigo">

    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
     @include('layouts.admin.include.topbar')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @include('layouts.admin.include.sidebar')
        <!-- #END# Left Sidebar -->

    </section>

    <section class="content">
     @yield('content')
    </section>


	<!-- SCIPTS -->
    <!-- Jquery Core Js -->
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('admin/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('admin/plugins/node-waves/waves.js')}}"></script>
    
    <!-- Custom Js -->
    <script src="{{asset('admin/js/admin.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('admin/js/demo.js')}}"></script>
    <!---alertjs file-->
    <script  src="{{ asset('admin/plugins/toaster/toastr.min.js')}}"></script>
    <script  src="{{ asset('admin/plugins/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>

    @stack('js')
         <script>
     @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
  </script>

       <script type="text/javascript">
           @if($errors->any())
              @foreach($errors->all() as $error)
              toastr.error('{{ $error }}','error',{
               CloseButton:true,
               progressBar:true,
               })                
           
           @endforeach
           @endif
       </script>
</body>
</html>