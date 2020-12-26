<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Site Meta Data -->
    <title>@yield('title')-{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="Search the most complete  directory. Find s.">
    <meta name="keywords" content="Community,, ">
    <!-- Social Media Meta Data -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="Search the most complete  database. Find .">
    <meta property="og:image" content="">
    <!-- Canonical Link and Rel Links -->
    <link rel="canonical" href="">
    <!-- Google Font API -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,900' rel='stylesheet' type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha384-pdapHxIh7EYuwy6K7iE41uXVxGCXY0sAjBzaElYGJUrzwodck3Lx6IE2lA0rFREo" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Froala Editor Front-End CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/froala_style.min.css')}}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/theme-styles.min.css?v=4.0.02')}}">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.min.css" integrity="sha384-uKZHvTXs9A65QejCOMRfbxH37eCn6yo7LB91qSYHgRXpUdcXp6+ZQyFmCZeyz8WC" crossorigin="anonymous">
    <!-- jQuery JS -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <!-- jQuery UI JS -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha384-YWP9O4NjmcGo4oEJFXvvYSEzuHIvey+LbXkBNJ1Kd0yfugEZN9NCQNpRYBVC1RvA" crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha384-pPttEvTHTuUJ9L2kCoMnNqCRcaMPMVMsWVO+RLaaaYDmfSP5//dP6eKRusbPcqhZ" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/js/image-validator.min.js?v=2.0')}}"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset($config->fav_icon)}}">
    <!-- Custom Site-wide HEAD Content -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic&subset=latin,vietnamese,latin-ext,cyrillic,cyrillic-ext,greek-ext,greek' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
      <!-- toaster-alert -->
   <link rel="stylesheet" href="{{ asset('frontend/plug/toaster/toastr.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/plug/bootstrap-sweetalert/dist/sweetalert.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.1.1/js/plugins/font_family.min.js"></script>
    <div class="head_load">
        <img src="{{asset('frontend/images/loadinggif.gif')}}" />
    </div>
    <script>
        $(document).ready(function() {
            $(".subs_events").click(function() {
                window.location.href = "/subscribed?t=1604121313"

            })

        });
    </script>
    <script type="text/javascript">
        _linkedin_partner_id = "2385465";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>
    <script type="text/javascript">
        (function() {
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";
            b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);
        })();
    </script>
    <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2385465&fmt=gif" />
    </noscript>
    <style>
        .the-post-image i {
            font-size: 30px;
            font-weight: 800;
        }

        .head_load {
            display: none;
            position: absolute;
            background-color: rgba(0, 0, 0, .8);
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            text-align: center;
            z-index: 999;
        }

        .head_load img {
            /* margin: auto; */
            /* vertical-align: middle; */
            position: absolute;
            top: 386px;
            right: 0;
            left: 0;
            bottom: 0;
            margin: 0 auto;
            width: 6% !important;
        }
    </style>
    <style type='text/css'>
        #map-canvas,
        #map-canvas_sidebar {
            height: 200px;
            width: 100%;
        }

        .suggestion-search-location {
            margin: 2px 2px;
            color: #333;
            background-color: #CEDDE9;
            display: inline-block;
            padding: 5px 11px;
        }

        .other-locations-container {
            overflow: hidden;
            max-height: 32px;
            transition: all 0.5s ease 0s;
        }

        span.show-more-suggestions {
            padding: 5px;
            margin: 0px 13px 9px 4px;
            display: inline-block;
            cursor: pointer;
            color: #1a0dab;
            font-weight: 500;
        }

        span.show-more-suggestions:hover {
            text-decoration: underline;
        }

        .suggestions-heading {
            margin-bottom: 5px;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&region=IN&language=en"></script>
</head>

<body>


    <style>
        /* Main Website Design */
        body,
        .modal-header,
        .modal-content,
        .modal-body,
        .modal-footer {
            background: rgb(255, 255, 255);
            color: rgb(41, 41, 41);
            font-family: Open Sans;
            font-size: 14px;
        }

        .select2-container .select2-choice {
            font-family: Open Sans !important;
        }

        html {
            background: rgb(239, 239, 239)
        }

        a,
        a.h1,
        a.h2,
        a.h3,
        a.h4,
        a.h5,
        a.h6,
        .pricing_menu li ul li a:not(.btn) {
            color: rgb(162, 0, 0);
        }

        a:hover,
        a:focus,
        .pricing_menu li ul li a:not(.btn):hover,
        .pricing_menu li ul li a:not(.btn):focus {
            color: rgb(219, 0, 0);
        }

        .breadcrumb a {
            color: rgba(41, 41, 41, 0.9);
        }

        .breadcrumb a:hover,
        .breadcrumb a:focus,
        .breadcrumb>.active {
            color: rgb(41, 41, 41);
        }

        .help-inline,
        .help-block {
            color: rgba(41, 41, 41, 0.5);
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Open Sans;
        }

        /* Header Design */
        .header {
            background: rgb(255, 255, 255);
        }

        .header .mini-nav li a,
        .header .mini-nav span {
            color: rgba(29, 68, 184);
        }

        .header .mini-nav li a:hover {
            color: rgb(25.5, 41.2, 88.2);
        }

        .header .btn_get_listed {
            background-color: rgb(25.5, 41.2, 88.2);
            border: 1px solid rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255) !important;
        }

        .header .btn_get_listed:hover,
        .header .btn_get_listed:focus {
            background-color: rgb(25.5, 41.2, 88.2);
        }

        .header .btn_search {
            background-color: rgb(25.5, 41.2, 88.2);
            border: 1px solid rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        .header .btn_search:hover,
        .header .btn_search:focus {
            background-color: rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        /* Logo Design */
        .logo,
        .logo:hover,
        .logo:focus {
            color: rgb(25.5, 41.2, 88.2);
            font-family: Open Sans;
        }

        .logo .slogan {
            color: rgb(25.5, 41.2, 88.2);
        }

        .logo .fa {
            color: rgb(25.5, 41.2, 88.2);
        }

        /* Main Menu Design */
        .member-profile-tabs>ul {
            background: rgb(238, 238, 238);
            position: sticky;
            top: 0px;
            z-index: 1;
        }

        @media only screen and (max-width: 1100px) {
            .member-profile-tabs>ul {
                top: 50px;
            }
        }

        .header ul.nav.navbar-nav li ul {
            background-color: rgb(25.5, 41.2, 88.2);
        }

        .header ul.nav.navbar-nav li ul li a,
        .header ul.nav.navbar-nav li ul li span {
            color: rgb(253, 253, 253);
        }

        .header .navbar-default,
        .pagination>.active>a {
            background-color: rgb(25.5, 41.2, 88.2);
        }

        .header ul.nav.navbar-nav li ul li a:hover,
        .header ul.nav.navbar-nav li ul li a:focus {
            border-left-color: rgb(253, 253, 253);
            background: rgb(253, 253, 253);
            color: rgb(25.5, 41.2, 88.2);
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: rgb(253, 253, 253);
        }

        .user_sidebar,
        .main_menu {
            color: rgb(253, 253, 253);
        }

        .navbar-default .navbar-nav>li>a,
        .navbar-default .navbar-nav>li>span {
            color: rgb(253, 253, 253);
        }

        .navbar-default .navbar-nav>li:hover>a,
        .navbar-default .navbar-nav>li>a:hover,
        .navbar-default .navbar-nav>li>a:active,
        .navbar-default .navbar-nav>li>a:focus {
            color: rgb(255, 255, 255);
        }

        .navbar-default .navbar-nav>li {
            font-family: Open Sans;
        }

        /* Footer Design */
        .footer {
            background-color: rgb(239, 239, 239);
            display: block;
        }

        .footer,
        .footer_menu a,
        .footer_terms a,
        .footer_menu .content {
            color: rgb(73, 73, 73);
        }

        .footer_menu a:hover,
        .footer_terms a:hover,
        .footer_menu a:focus,
        .footer_terms a:focus {
            color: rgb(162, 0, 0);
        }

        .footer_menu .head {
            color: rgb(29, 68, 184);
        }

        .btn_footer_get_listed {
            background-color: rgba(208, 29, 21, 0.95);
            border: 1px solid rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255) !important;
        }

        .btn_footer_get_listed:hover,
        .btn_footer_get_listed:focus {
            background-color: rgb(25.5, 41.2, 88.2);
        }

        /* Homepage Design */
        .homepage_settings h1,
        .homepage_settings h2,
        .homepage_map h1,
        .homepage_map h2 {
            font-family: Open Sans;
        }

        .homepage_settings h1,
        .homepage_map h1 {
            color: rgb(255, 255, 255);
            font-weight: 600
        }

        .homepage_settings h2,
        .homepage_map h2 {
            color: rgb(22, 22, 22);
            font-weight: 400
        }

        .homepage_settings .search_box label {
            color: rgb(22, 22, 22);
        }

        .btn_home_search,
        .search_box input[type=submit] {
            background-color: rgb(25.5, 41.2, 88.2);
            border: 1px solid rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        .btn_home_search:hover,
        .btn_home_search:focus,
        .search_box input[type=submit]:hover,
        .search_box input[type=submit]:focus {
            background-color: rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        .homepage_settings .search_box {
            background-color: rgba(255, 255, 255, 0.8);
        }

        /* Homepage Steps Module */
        .homepage_steps {
            background: rgb(238, 238, 238);
            color: rgb(29, 28, 28);
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .homepage_steps a.homepage_step_link,
        .homepage_steps a.homepage_step_link:hover,
        .homepage_steps a.homepage_step_link:active {
            color: rgb(29, 28, 28) !important;
        }

        .homepage_steps .fa {
            color: rgb(255, 255, 255);
        }

        /* Blog Posts Slider Settings */
        #myCarousel h3 a,
        .carousel-caption p,
        #myCarousel li.list-group-item h4 {
            color: rgb(253, 253, 253);
        }

        #myCarousel .list-group-item {
            background-color: rgba(208, 29, 21, 0.9);
            border-color: rgba(208, 29, 21, 0.80);
        }

        #myCarousel .carousel-caption {
            background-color: rgba(208, 29, 21, 0.8);
        }

        #myCarousel .list-group,
        #myCarousel .carousel-inner {
            background-color: rgb(25.5, 41.2, 88.2)
        }

        #myCarousel .list-group .active,
        #myCarousel .list-group-item:hover {
            background-color: rgb(25.5, 41.2, 88.2)
        }

        #myCarousel .list-group .active h4,
        #myCarousel .list-group-item:hover h4 {
            color: rgb(255, 255, 255);
        }

        /* Additional Settings */
        .well blockquote {
            background: rgb(255, 255, 255) none repeat scroll 0 0;
            border-color: rgb(238, 238, 238);
            color: rgb(41, 41, 41);
            padding: 10px 20px;
        }

        .account-form-box form table tr td table {
            background-color: transparent !important;
            border: none !important;
        }

        .account-form-box form table tr td table td {
            background-color: transparent !important;
            color: rgb(41, 41, 41) !important;
            border: none !important;
        }

        div.dataTables_length label,
        div.dataTables_filter label,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
            color: rgb(41, 41, 41) !important;
        }

        .table.dataTable>thead>tr>th,
        .table>thead>tr>th {
            background-color: rgb(238, 238, 238);
            color: rgb(85, 85, 85);
            border-bottom: 0;
            font-weight: 600;
        }

        table.dataTable tbody tr {
            background-color: rgb(250, 250, 250) !important;
        }

        .table-striped.dataTable tbody>tr:nth-of-type(2n+1),
        .table-striped>tbody>tr:nth-of-type(2n+1) {
            background-color: rgba(255, 255, 255, 0.3) !important;
        }

        .sidemenu_panel .list-group-item {
            background-color: transparent !important;
            color: rgb(41, 41, 41) !important;
        }

        .img-thumbnail {
            background-color: rgb(250, 250, 250) !important;
            border: 1px solid rgb(238, 238, 238);
        }

        .member_admin_sidemenu p,
        .member_admin_sidemenu h3 {
            color: rgb(41, 41, 41) !important;
        }

        .panel {
            background: rgba(250, 250, 250, 0.4);
        }

        .panel-heading {
            color: rgb(41, 41, 41) !important;
            background-color: rgb(250, 250, 250) !important;
        }

        .panel-default {
            border-color: rgb(238, 238, 238);
        }

        .close {
            color: rgb(41, 41, 41);
            opacity: 1;
        }

        .member_results_header h1,
        .content_w_sidebar.feature-search h1 {
            font-size: 24px;
            display: block;
        }

        .member_results_header h2 {
            font-size: 24px;
            display: block;
        }

        .homepage_settings {
            padding-top: 300px;
            padding-bottom: 300px;
        }

        @media only screen and (max-width: 768px) {
            .member-profile-header .favorite {
                float: none
            }
        }

        @media only screen and (max-width: 1100px) {}

        .views>i.fa.activeView {
            background-color: rgb(25.5, 41.2, 88.2);
            color: rgb(253, 253, 253);
        }

        .views>i.fa {
            background-color: rgba(208, 29, 21, 0.6);
            color: rgb(253, 253, 253);
        }

        .ui-rangeSlider-label {
            background-color: rgb(25.5, 41.2, 88.2) !important;
            color: rgb(253, 253, 253) !important;
        }

        .pricing_menu li .title {
            background: rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        p.account-tip {
            color: rgb(41, 41, 41);
        }

        .circled_number {
            background: rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        .pic {
            background-color: rgba(208, 29, 21, 0.8);
            color: rgb(255, 255, 255);
            background-repeat: no-repeat;
            background-position: center;
        }

        .pic .pic-caption {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0) 0%, rgba(25.5, 41.2, 88.2) 50%);
            color: rgb(255, 255, 255);
        }

        .slick-prev-fa i,
        .slick-next-fa i {
            color: rgb(25.5, 41.2, 88.2);
        }

        .module,
        .well,
        .tab-content,
        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover,
        .nav-tabs>li>a:focus,
        .nav-tabs>li>a:hover,
        .nav-tabs.nav-justified>li.active>a,
        .nav-tabs.nav-justified>li.active>a:focus,
        .nav-tabs.nav-justified>li.active>a:hover,
        .nav-tab.nav-justified>li>a:focus,
        .nav-tabs.nav-justified>li>a:hover,
        .account-form-box,
        .account-form-box .module .module,
        .account-form-box .module .well,
        .account-form-box .well .well,
        .account-form-box .well .module {
            background-color: rgb(250, 250, 250);
            border-color: rgb(238, 238, 238);
            color: rgb(41, 41, 41);
        }

        .member-profile-tabs .nav-tabs>li:not(.active)>a {
            background: rgba(250, 250, 250, 0.5);
            color: rgb(41, 41, 41);
        }

        .member-profile-tabs .nav-tabs>li:not(.active)>a:hover {
            background: rgba(250, 250, 250, 1);
            color: rgb(41, 41, 41);
        }

        .author-snapshot .well {
            background-color: rgb(250, 250, 250) !important;
            border-color: rgb(238, 238, 238) !important;
            color: rgb(41, 41, 41) !important;
        }

        .module .help-inline,
        .module .help-block,
        .well .help-inline,
        .well .help-block,
        .account-form-box .help-inline,
        .account-form-box .help-block,
        .account-form-box p.account-tip {
            color: rgba(41, 41, 41, 0.5);
        }

        #service_areas_table td,
        #service_areas_table_wrapper label,
        #service_areas_table_info,
        #service_areas_table_paginate>a {
            color: rgb(41, 41, 41) !important;
        }

        .popover-content,
        .popover {
            background-color: rgb(250, 250, 250);
            color: rgb(41, 41, 41);
        }

        .popover.bottom>.arrow:after {
            border-bottom-color: rgb(250, 250, 250) !important;
        }

        .progress,
        .table-view .table-view-group:nth-child(2n-1),
        .tab-content .well,
        .tab-content .module,
        #account-tabs .well,
        #account-tabs .module,
        .account-form-box .module,
        .account-form-box .well,
        .module .module,
        .well .well,
        .module .well,
        .well .module {
            background-color: rgb(255, 255, 255);
            color: rgb(41, 41, 41);
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th,
        .nav-tabs,
        .panel-default>.panel-heading,
        hr,
        .account-menu-title,
        table.dataTable.no-footer {
            border-color: rgb(238, 238, 238);
        }

        .table-view li {
            border-top: 1px solid rgb(238, 238, 238);
        }

        .table-view .table-view-group:last-child {
            border-bottom: 1px solid rgb(238, 238, 238);
        }

        .module h1,
        .module h2,
        .module h3,
        .module h4,
        .module h5 {
            color: rgb(0, 0, 0);
        }

        .module p {
            color: rgb(41, 41, 41);
        }

        .pagination>.active>a {
            border-color: rgba(253, 253, 253, 0.2);
        }

        .pagination>.active>a {
            color: rgb(253, 253, 253);
        }

        .pagination>.active>a:hover,
        .pagination>.active>a:focus {
            border-color: rgba(253, 253, 253, 0.2);
            background-color: rgb(25.5, 41.2, 88.2);
            color: rgb(253, 253, 253);
        }

        .pagination>li>a {
            color: rgb(25.5, 41.2, 88.2);
            border-color: rgba(208, 29, 21, 0.2);
            background-color: rgb(253, 253, 253);
        }

        .pagination>li>a:focus,
        .pagination>li>a:hover,
        .pagination>li>span:focus,
        .pagination>li>span:hover {
            background-color: rgb(25.5, 41.2, 88.2);
            border-color: rgb(25.5, 41.2, 88.2);
            color: rgb(253, 253, 253);
        }

        .nav-pills.nav-wizard>li a,
        .nav-pills.nav-wizard>li a:hover {
            background-color: rgb(247, 202, 24) !important;
            color: rgb(47, 47, 47) !important;
        }

        .member_wizard2 li.incomplete {
            background: rgb(247, 202, 24) !important;
        }

        .member_wizard2 li.incomplete a {
            color: rgb(47, 47, 47);
        }

        .nav-pills.nav-wizard>li.active a,
        .nav-pills.member_wizard>li.active:hover a {
            background-color: rgb(25.5, 41.2, 88.2) !important;
            color: rgb(255, 255, 255) !important;
        }

        .member_wizard2 li.active {
            background: rgb(25.5, 41.2, 88.2) !important;
        }

        .member_wizard2 li.completed a {
            color: rgb(255, 255, 255);
        }

        .nav-pills.nav-wizard>li.active .nav-arrow,
        .nav-pills.nav-wizard>li.active:hover .nav-arrow {
            border-color: transparent transparent transparent rgb(25.5, 41.2, 88.2) !important;
        }

        .nav-pills.nav-wizard>li.active .nav-wedge,
        .nav-pills.nav-wizard>li.active:hover .nav-wedge {
            border-color: rgb(25.5, 41.2, 88.2) rgb(25.5, 41.2, 88.2) rgb(25.5, 41.2, 88.2) transparent !important;
        }

        li.completed .nav-wedge,
        .nav-pills.nav-wizard>li.completed:hover .nav-wedge {
            border-color: rgb(42, 178, 123) rgb(42, 178, 123) rgb(42, 178, 123) transparent !important;
        }

        li.incomplete .nav-wedge,
        .nav-pills.nav-wizard>li.incomplete:hover .nav-wedge {
            border-color: rgb(247, 202, 24) rgb(247, 202, 24) rgb(247, 202, 24) transparent !important;
        }

        .nav-pills.member_wizard>li.completed a,
        .nav-pills.member_wizard>li.completed a:hover {
            background-color: rgb(42, 178, 123) !important;
            color: rgb(255, 255, 255) !important;
        }

        .member_wizard2 li.completed {
            background: rgb(42, 178, 123) !important;
        }

        .member_wizard2 li.completed a {
            color: rgb(255, 255, 255);
        }

        .member_wizard2 li {
            color: rgb(255, 255, 255);
            border-right: 3px solid rgb(255, 255, 255);
        }

        li.completed .nav-arrow,
        .nav-pills.nav-wizard>li.completed:hover .nav-arrow {
            border-color: transparent transparent transparent rgb(42, 178, 123) !important;
        }

        li.incomplete .nav-arrow,
        .nav-pills.nav-wizard>li.incomplete:hover .nav-arrow {
            border-color: transparent transparent transparent rgb(247, 202, 24) !important;
        }

        /* Default Colors */
        .btn-primary,
        .btn-primary.disabled,
        .btn-primary.disabled.active,
        .btn-primary.disabled.focus,
        .btn-primary.disabled:active,
        .btn-primary.disabled:focus,
        .btn-primary.disabled:hover,
        .btn-primary[disabled],
        .btn-primary[disabled].active,
        .btn-primary[disabled].focus,
        .btn-primary[disabled]:active,
        .btn-primary[disabled]:focus,
        .btn-primary[disabled]:hover,
        fieldset[disabled] .btn-primary,
        fieldset[disabled] .btn-primary.active,
        fieldset[disabled] .btn-primary.focus,
        fieldset[disabled] .btn-primary:active,
        fieldset[disabled] .btn-primary:focus,
        fieldset[disabled] .btn-primary:hover {
            background-color: rgba(25.5, 41.2, 88.2);
            border-color: rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary:active:focus,
        .btn-primary:active:hover,
        .nav>li>a.btn-primary:focus,
        .nav>li>a.btn-primary:hover,
        .btn-primary.active,
        .open>.dropdown-toggle.btn-primary,
        .btn-primary.active.focus,
        .btn-primary.active:focus,
        .btn-primary.active:hover,
        .btn-primary:active.focus,
        .open>.dropdown-toggle.btn-primary:hover,
        .open>.dropdown-toggle.btn-primary:focus,
        .open>.dropdown-toggle.btn-primary.focus,
        a.bg-primary:focus,
        a.bg-primary:hover {
            background-color: rgb(25.5, 41.2, 88.2);
            border-color: rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        .bg-primary,
        .progress-bar-primary,
        .module p.bg-primary,
        .label-primary,
        .pricing_menu .title.bg-primary {
            background-color: rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        .bg-primary .badge {
            background-color: rgb(255, 255, 255);
            color: rgb(25.5, 41.2, 88.2);
        }

        .alert-primary {
            background-color: rgba(208, 29, 21, 0.7);
            border-color: rgba(208, 29, 21, 0.7);
            color: rgba(255, 255, 255, 0.9);
        }

        .text-primary {
            color: rgb(25.5, 41.2, 88.2);
        }

        .btn-info,
        .btn-info.disabled,
        .btn-info.disabled.active,
        .btn-info.disabled.focus,
        .btn-info.disabled:active,
        .btn-info.disabled:focus,
        .btn-info.disabled:hover,
        .btn-info[disabled],
        .btn-info[disabled].active,
        .btn-info[disabled].focus,
        .btn-info[disabled]:active,
        .btn-info[disabled]:focus,
        .btn-info[disabled]:hover,
        fieldset[disabled] .btn-info,
        fieldset[disabled] .btn-info.active,
        fieldset[disabled] .btn-info.focus,
        fieldset[disabled] .btn-info:active,
        fieldset[disabled] .btn-info:focus,
        fieldset[disabled] .btn-info:hover {
            background-color: rgba(25.5, 41.2, 88.2);
            border-color: rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        .btn-info:hover,
        .btn-info:focus,
        .btn-info:active,
        .btn-info:active:focus,
        .btn-info:active:hover,
        .nav>li>a.btn-info:focus,
        .nav>li>a.btn-info:hover,
        .btn-info.active,
        .open>.dropdown-toggle.btn-info,
        .btn-info.active.focus,
        .btn-info.active:focus,
        .btn-info.active:hover,
        .btn-info:active.focus,
        .open>.dropdown-toggle.btn-info:hover,
        .open>.dropdown-toggle.btn-info:focus,
        .open>.dropdown-toggle.btn-info.focus,
        a.bg-info:focus,
        a.bg-info:hover {
            background-color: rgb(219, 71, 5);
            border-color: rgb(219, 71, 5);
            color: rgb(255, 255, 255);
        }

        .bg-info,
        .progress-bar-info,
        .module p.bg-info,
        .label-info,
        .pricing_menu .title.bg-info {
            background-color: rgb(219, 71, 5);
            color: rgb(255, 255, 255);
        }

        .bg-info .badge {
            background-color: rgb(255, 255, 255);
            color: rgb(219, 71, 5);
        }

        .alert-info {
            background-color: rgba(219, 71, 5, 0.7);
            border-color: rgba(219, 71, 5, 0.7);
            color: rgba(255, 255, 255, 0.9);
        }

        .text-info {
            color: rgb(219, 71, 5);
        }

        .btn-success,
        .btn-success.disabled,
        .btn-success.disabled.active,
        .btn-success.disabled.focus,
        .btn-success.disabled:active,
        .btn-success.disabled:focus,
        .btn-success.disabled:hover,
        .btn-success[disabled],
        .btn-success[disabled].active,
        .btn-success[disabled].focus,
        .btn-success[disabled]:active,
        .btn-success[disabled]:focus,
        .btn-success[disabled]:hover,
        fieldset[disabled] .btn-success,
        fieldset[disabled] .btn-success.active,
        fieldset[disabled] .btn-success.focus,
        fieldset[disabled] .btn-success:active,
        fieldset[disabled] .btn-success:focus,
        fieldset[disabled] .btn-success:hover {
            background-color: rgba(42, 178, 123, 0.95);
            border-color: rgb(42, 178, 123);
            color: rgb(255, 255, 255);
        }

        .btn-success:hover,
        .btn-success:focus,
        .btn-success:active,
        .btn-success:active:focus,
        .btn-success:active:hover,
        .nav>li>a.btn-success:focus,
        .nav>li>a.btn-success:hover,
        .btn-success.active,
        .open>.dropdown-toggle.btn-success,
        .btn-success.active.focus,
        .btn-success.active:focus,
        .btn-success.active:hover,
        .btn-success:active.focus,
        .open>.dropdown-toggle.btn-success:hover,
        .open>.dropdown-toggle.btn-success:focus,
        .open>.dropdown-toggle.btn-success.focus,
        a.bg-success:focus,
        a.bg-success:hover {
            background-color: rgb(42, 178, 123);
            border-color: rgb(42, 178, 123);
            color: rgb(255, 255, 255);
        }

        .bg-success,
        .progress-bar-success,
        .module p.bg-success,
        .label-success,
        .pricing_menu .title.bg-success {
            background-color: rgb(42, 178, 123);
            color: rgb(255, 255, 255);
        }

        .bg-success .badge {
            background-color: rgb(255, 255, 255);
            color: rgb(42, 178, 123);
        }

        .alert-success {
            background-color: rgba(42, 178, 123, 0.7);
            border-color: rgba(42, 178, 123, 0.7);
            color: rgba(255, 255, 255, 0.9);
        }

        .text-success {
            color: rgb(42, 178, 123);
        }

        .btn-warning,
        .btn-warning.disabled,
        .btn-warning.disabled.active,
        .btn-warning.disabled.focus,
        .btn-warning.disabled:active,
        .btn-warning.disabled:focus,
        .btn-warning.disabled:hover,
        .btn-warning[disabled],
        .btn-warning[disabled].active,
        .btn-warning[disabled].focus,
        .btn-warning[disabled]:active,
        .btn-warning[disabled]:focus,
        .btn-warning[disabled]:hover,
        fieldset[disabled] .btn-warning,
        fieldset[disabled] .btn-warning.active,
        fieldset[disabled] .btn-warning.focus,
        fieldset[disabled] .btn-warning:active,
        fieldset[disabled] .btn-warning:focus,
        fieldset[disabled] .btn-warning:hover {
            background-color: rgba(247, 202, 24, 0.95);
            border-color: rgb(247, 202, 24);
            color: rgb(47, 47, 47);
        }

        .btn-warning:hover,
        .btn-warning:focus,
        .btn-warning:active,
        .btn-warning:active:focus,
        .btn-warning:active:hover,
        .nav>li>a.btn-warning:focus,
        .nav>li>a.btn-warning:hover,
        .btn-warning.active,
        .open>.dropdown-toggle.btn-warning,
        .btn-warning.active.focus,
        .btn-warning.active:focus,
        .btn-warning.active:hover,
        .btn-warning:active.focus,
        .open>.dropdown-toggle.btn-warning:hover,
        .open>.dropdown-toggle.btn-warning:focus,
        .open>.dropdown-toggle.btn-warning.focus,
        a.bg-warning:focus,
        a.bg-warning:hover {
            background-color: rgb(247, 202, 24);
            border-color: rgb(247, 202, 24);
            color: rgb(47, 47, 47);
        }

        .bg-warning,
        .progress-bar-warning,
        .module p.bg-warning,
        .label-warning,
        .pricing_menu .title.bg-warning {
            background-color: rgb(247, 202, 24);
            color: rgb(47, 47, 47);
        }

        .bg-warning .badge {
            background-color: rgb(47, 47, 47);
            color: rgb(247, 202, 24);
        }

        .alert-warning {
            background-color: rgba(247, 202, 24, 0.7);
            border-color: rgba(247, 202, 24, 0.7);
            color: rgba(47, 47, 47, 0.9);
        }

        .text-warning {
            color: rgb(247, 202, 24);
        }

        .btn-danger,
        .btn-danger.disabled,
        .btn-danger.disabled.active,
        .btn-danger.disabled.focus,
        .btn-danger.disabled:active,
        .btn-danger.disabled:focus,
        .btn-danger.disabled:hover,
        .btn-danger[disabled],
        .btn-danger[disabled].active,
        .btn-danger[disabled].focus,
        .btn-danger[disabled]:active,
        .btn-danger[disabled]:focus,
        .btn-danger[disabled]:hover,
        fieldset[disabled] .btn-danger,
        fieldset[disabled] .btn-danger.active,
        fieldset[disabled] .btn-danger.focus,
        fieldset[disabled] .btn-danger:active,
        fieldset[disabled] .btn-danger:focus,
        fieldset[disabled] .btn-danger:hover {
            background-color: rgba(44, 102, 217, 0.95);
            border-color: rgb(44, 102, 217);
            color: rgb(255, 255, 255);
        }

        .btn-danger:hover,
        .btn-danger:focus,
        .btn-danger:active,
        .btn-danger:active:focus,
        .btn-danger:active:hover,
        .nav>li>a.btn-danger:focus,
        .nav>li>a.btn-danger:hover,
        .btn-danger.active,
        .open>.dropdown-toggle.btn-danger,
        .btn-danger.active.focus,
        .btn-danger.active:focus,
        .btn-danger.active:hover,
        .btn-danger:active.focus,
        .open>.dropdown-toggle.btn-danger:hover,
        .open>.dropdown-toggle.btn-danger:focus,
        .open>.dropdown-toggle.btn-danger.focus,
        a.bg-danger:focus,
        a.bg-danger:hover {
            background-color: rgb(44, 102, 217);
            border-color: rgb(44, 102, 217);
            color: rgb(255, 255, 255);
        }

        .bg-danger,
        .progress-bar-danger,
        .module p.bg-danger,
        .label-danger,
        .pricing_menu .title.bg-danger {
            background-color: rgb(44, 102, 217);
            color: rgb(255, 255, 255);
        }

        .bg-danger .badge {
            background-color: rgb(255, 255, 255);
            color: rgb(44, 102, 217);
        }

        .alert-danger {
            background-color: rgba(44, 102, 217, 0.7);
            border-color: rgba(44, 102, 217, 0.7);
            color: rgba(255, 255, 255, 0.9);
        }

        .text-danger {
            color: rgb(44, 102, 217);
        }

        .btn-default,
        .tags a,
        .btn-default.disabled,
        .btn-default.disabled.active,
        .btn-default.disabled.focus,
        .btn-default.disabled:active,
        .btn-default.disabled:focus,
        .btn-default.disabled:hover,
        .btn-default[disabled],
        .btn-default[disabled].active,
        .btn-default[disabled].focus,
        .btn-default[disabled]:active,
        .btn-default[disabled]:focus,
        .btn-default[disabled]:hover,
        fieldset[disabled] .btn-default,
        fieldset[disabled] .btn-default.active,
        fieldset[disabled] .btn-default.focus,
        fieldset[disabled] .btn-default:active,
        fieldset[disabled] .btn-default:focus,
        fieldset[disabled] .btn-default:hover {
            background-color: rgb(238, 238, 238);
            border-color: rgba(85, 85, 85, 0.05);
            color: rgb(85, 85, 85);
        }

        .btn-default:hover,
        .btn-default:focus,
        .btn-default:active,
        .btn-default:active:focus,
        .btn-default:active:hover,
        .tags a:hover,
        .nav>li>a.btn-default:focus,
        .nav>li>a.btn-default:hover,
        .btn-default.active,
        .open>.dropdown-toggle.btn-default,
        .btn-default.active.focus,
        .btn-default.active:focus,
        .btn-default.active:hover,
        .btn-default:active.focus,
        .open>.dropdown-toggle.btn-default:hover,
        .open>.dropdown-toggle.btn-default:focus,
        .open>.dropdown-toggle.btn-default.focus,
        a.bg-default:focus,
        a.bg-default:hover {
            background-color: rgba(238, 238, 238, 0.7);
            border-color: rgba(85, 85, 85, 0.05);
            color: rgb(85, 85, 85);
        }

        .bg-default,
        .progress-bar-default,
        .module p.bg-default,
        .label-default,
        .pricing_menu .title.bg-default {
            background-color: rgb(238, 238, 238);
            color: rgb(85, 85, 85);
        }

        .bg-default .badge {
            background-color: rgb(85, 85, 85);
            color: rgb(238, 238, 238);
        }

        .alert-default {
            background-color: rgba(238, 238, 238, 0.7);
            border-color: rgba(238, 238, 238, 0.7);
            color: rgba(85, 85, 85, 0.9);
        }

        .text-default {
            color: rgb(238, 238, 238);
        }

        .btn-secondary {
            background-color: rgba(41, 41, 41, 0.95);
            border: 1px solid rgb(41, 41, 41);
            color: rgb(255, 255, 255);
        }

        .btn-secondary:hover,
        .btn-secondary:focus,
        .btn-secondary:active,
        .btn-secondary:active:focus,
        .btn-secondary:active:hover,
        .nav>li>a.btn-secondary:focus,
        .nav>li>a.btn-secondary:hover,
        .btn-secondary.active,
        .open>.dropdown-toggle.btn-secondary,
        .btn-secondary.active.focus,
        .btn-secondary.active:focus,
        .btn-secondary.active:hover,
        .btn-secondary:active.focus,
        .open>.dropdown-toggle.btn-secondary:hover,
        .open>.dropdown-toggle.btn-secondary:focus,
        .open>.dropdown-toggle.btn-secondary.focus,
        a.bg-secondary:focus,
        a.bg-secondary:hover {
            background-color: rgb(41, 41, 41);
            border: 1px solid rgb(41, 41, 41);
            color: rgb(255, 255, 255);
        }

        .bg-secondary,
        .progress-bar-secondary,
        .module p.bg-secondary,
        .label-secondary,
        .pricing_menu .title.bg-secondary {
            background-color: rgb(41, 41, 41);
            color: rgb(255, 255, 255);
        }

        .bg-secondary .badge {
            background-color: rgb(255, 255, 255);
            color: rgb(41, 41, 41);
        }

        .alert-secondary {
            background-color: rgba(41, 41, 41, 0.7);
            border-color: rgba(41, 41, 41, 0.7);
            color: rgba(255, 255, 255, 0.9);
        }

        .feature-post #post-content .alert-secondary.btn-block,
        .feature-search .img_section .alert-secondary.btn-block,
        .search_result .img_section .alert-secondary {
            background-color: rgba(41, 41, 41, 0.2);
        }

        /* Footer Newsletter Row */
        .newsletter_row .alert {
            color: rgb(255, 255, 255);
        }

        .newsletter_row {
            background-color: rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        .newsletter_row input[type="submit"],
        .newsletter_footer_button {
            background-color: rgba(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
            border-color: rgb(30, 69, 184);
        }

        .newsletter_row input[type="submit"]:hover,
        .newsletter_row input[type="submit"]:focus,
        .newsletter_footer_button:hover,
        .newsletter_footer_button:focus {
            background-color: rgb(25.5, 41.2, 88.2);
            color: rgb(255, 255, 255);
        }

        .newsletter_button_left {
            border-right: 1px solid rgba(255, 255, 255, 0.2);
        }

        .newsletter_button_right {
            border-left: 1px solid rgba(255, 255, 255, 0.2);
        }

        .newsletter_row small.help-block {
            background: rgb(255, 255, 255);
            margin-top: -5px;
            float: left;
            padding: 8px;
            border-radius: 1px;
            color: rgb(25.5, 41.2, 88.2);
            text-transform: capitalize;
        }

        .newsletter_row .has-success .checkbox,
        .newsletter_row .has-error .checkbox {
            color: rgb(255, 255, 255);
        }

        @media only screen and (max-width: 767px) {

            .newsletter_button_right,
            .newsletter_button_left {
                border: none;
                margin: 5px 0;
            }
        }

        /* Font Sizes */
        .navbar-default .navbar-nav>li>a,
        .navbar-default .navbar-nav>li>span {
            font-size: 16px;
        }

        .header .logo {
            font-size: 34px;
        }

        .homepage_title h1 {
            font-size: 60px;
        }

        .homepage_settings h2 {
            font-size: 28px;
        }

        .ui-rangeSlider-bar {
            background: rgb(25.5, 41.2, 88.2) !important;
        }

        @media only screen and (max-width: 1024px) {
            .modal {
                margin-top: 40px;
            }
        }

        @media only screen and (max-width: 768px) {
            .modal {
                margin-top: 60px;
            }
        }

        /* Calendar Styles */
        .cal-month-box,
        .cal-year-box,
        .cal-week-box {
            border: 1px solid rgb(238, 238, 238) !important;
        }

        .cal-year-box .row-fluid,
        .cal-month-box .cal-row-fluid {
            border-bottom: 1px solid rgb(238, 238, 238) !important;
        }

        .cal-year-box [class*="span"],
        .cal-month-box [class*="cal-cell"] {
            border-right: 1px solid rgb(238, 238, 238) !important;
        }

        .cal-year-box .row-fluid,
        .cal-row-fluid,
        #cal-day-box .cal-day-hour:nth-child(odd) {
            background-color: rgb(255, 255, 255) !important;
        }

        .cal-month-day span {
            color: rgb(41, 41, 41) !important;
        }

        .cal-day-today span[data-cal-date] {
            color: rgb(41, 41, 41) !important;
        }

        .cal-year-box .row-fluid [class*="span"]:last-child,
        .cal-month-box .cal-row-fluid [class*="cal-cell"]:last-child {
            border: 0 !important;
        }

        .cal-row-head {
            background: rgb(250, 250, 250) !important;
        }

        .day-highlight:hover,
        .day-highlight {
            background-color: rgb(238, 238, 238) !important;
        }

        .event {
            background-color: rgb(41, 41, 41) !important;
            opacity: 0.4;
        }

        .cal-day-today {
            background-color: rgb(238, 238, 238) !important;
        }

        #cal-day-tick {
            border: 1px solid rgb(238, 238, 238) !important;
            background-color: rgb(238, 238, 238) !important;
        }

        .cal-day-weekend span[data-cal-date] {
            color: rgb(41, 41, 41) !important;
        }

        .well,
        .btn-group-lg>.btn,
        .member_profile .tab-content,
        .btn-lg,
        .corner_caption,
        .module,
        .btn,
        .btn-xs,
        .btn-sm,
        btn-lg,
        .btn-xl,
        .img-rounded,
        .nav-tabs *,
        input,
        .input-group-sm>.form-control,
        .input-group-sm>.input-group-addon,
        .input-group-sm>.input-group-btn>.btn,
        textarea,
        select,
        .header ul.nav.navbar-nav li ul,
        .progress,
        .alert,
        .pagination,
        .page-item:first-child .page-link,
        .page-item:last-child .page-link,
        .views>i.fa,
        .ui-rangeSlider-label,
        .pic,
        .panel,
        .popover,
        .tags a,
        .pricing_menu li .title,
        .form-control,
        .select2-choice,
        .form-group .select2-dropdown-open.select2-drop-above [class^=select2-choice],
        .select2-drop.select2-drop-above,
        .select2-drop,
        .scrollup,
        .input-group-addon,
        .img-thumbnail,
        .current-photo-container img,
        .current-logo-container img,
        .favorite,
        p.account-tip,
        .modal-content,
        .input_wrapper input.form-control,
        .input-group .input_wrapper input.form-control,
        .input-group-sm .input_wrapper input.form-control,
        .input-group-lg .input_wrapper input.form-control {
            border-radius: 0px !important;
        }

        .rsDefault,
        .rsDefault .rsOverflow,
        .rsDefault .rsSlide,
        .rsDefault .rsVideoFrameHolder,
        .rsDefault .rsThumbs {
            background: #151515 !important;
        }

        .img-circle {
            border-radius: 1000px !important;
        }

        .favorite {
            color: rgb(85, 85, 85);
            background: rgb(238, 238, 238);
            border: 1px solid rgb(238, 238, 238);
        }

        .favorite span {
            font-family: Open Sans
        }

        .favoriteActive {
            color: rgb(44, 102, 217);
        }

        .favorite::after {
            font-family: Open Sans;
            margin-left: 3px;
        }

        .favorite span {
            padding-left: 3px;
            font-family: Open Sans;
            font-size: 11px;
        }

        .favorite .bookmark-number {
            background: rgb(85, 85, 85);
            color: rgb(238, 238, 238);
            padding: 0 5px;
            border-radius: 100px;
            display: inline-block;
            font-weight: bold;
        }

        .favorite.favoriteActive .bookmark-number {
            background: rgb(44, 102, 217);
        }

        span.checkbox_value::after {
            content: ', ';
        }

        span.checkbox_value:last-child::after {
            content: '';
        }

        /*  Homepage Sections Background Color Logic */
        /* Additional Settings */
        .img-circle img {
            border-radius: 50000px;
        }

        .img-rounded img {
            border-radius: 6px;
        }

        /* Streaming Widgets Title Settings */
        .streaming-title {
            text-align: left;
            font-size: 30px;
            font-weight: 600;
            padding-bottom: 0px;
        }
    </style>
    <!-- ON-PAGE CSS FUNCTIONS -->
    <style type="text/css">
        .choose_menu {
            display: none !important;
        }

        .subs_events {
            display: none !important;
        }

        .head_join {
            display: table-cell !important;
        }

        #hero-divider.homepage_steps h3,
        #hero-divider.homepage_steps p {
            margin: 0 !important;
            font-size: 16px;
            color: rgb(253, 253, 253);
            font-weight: normal;
        }

        .pricing_menu li .price {
            font-size: 17px !important;
            font-weight: 600 !important;
        }

        #first_container.vegas-container {
            height: 433px !important
        }

        .update-credit-card {
            display: none
        }

        #first_container.vegas-container {
            margin: auto;
        }

        .chapter_icons li {
            float: left;
            list-style: none;
        }

        .chap_new_pos {
            position: relative;
        }

        .chapter_icons {
            right: 20px;
            position: absolute;
            top: 0;
            font-size: 30px;
            transform: translate(0, 50px);
        }

        .content_icons li {
            float: left;
            list-style: none;
            font-size: 25px;
            margin-right: 5px;
        }

        .content_icons {
            justify-content: center;
            display: flex;
            padding: 0;
        }

        .content {
            text-align: center;
        }

        .content .fa {
            font-size: 25px;
        }

        .content h5 {
            font-size: 16px;
        }

        #purschase-limit.publish-post-button1,
        .publish-post-button1 {
            position: absolute;
            right: 0px;
            top: -42px;
            text-transform: capitalize;
            font-weight: 600;
        }

        .image_div {
            height: 100px;
            max-width: 100px;
            width: 100%;
            margin: auto;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            box-shadow: 2px 2px 4px 0px #eadcdc;
        }

        .pricing_menu li .title {
            font-size: 27px !important;
        }

        .title.starter {
            background: #ff8f00 !important;
        }

        .chapter_icons {
            right: 0 !important;
            position: relative !important;
            top: 0;
            font-size: 25px;
            transform: translate(0, 50px);
            padding: 0;
            margin: 0;
            display: inline;
        }

        .chapter_icons li {
            float: left;
            list-style: none;
        }
    </style>
    <div class="header">
        <div class="container">
            <div class="row vmargin">
                <div id="website_logo" class="col-md-5 tpad sm-text-center">
                    <a href="{{URL::to('/')}}" title="">
                        <img src="{{asset($config->logo)}}" alt="">
                    </a>
                </div>
                <style type='text/css'>
                    .goog-te-gadget-simple {
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
                        color: #555;
                    }

                    .header_category .btn-group button {
                        padding: 5px 30px;
                        border: 1px solid #ccc;
                        font-size: 14px;
                        width: 168px !important;
                        height: 30px !important;
                    }

                    img.goog-te-gadget-icon {
                        display: none;
                    }

                    .skiptranslate.goog-te-gadget span {
                        display: none;
                    }

                    .skiptranslate {
                        font-size: 0px;
                    }

                    .goog-te-gadget .goog-te-combo {
                        margin-bottom: -4px;
                    }

                    .skiptranslate.goog-te-gadget select {
                        border: 1px solid #ddd;
                        border-radius: 3px;
                        font-size: 12px;
                        padding: 2px;
                        width: 100%;
                        background: #fff;
                    }

                    body input.tt-hint,
                    body input.member_search.form-control.normal-autosuggest-input.tt-query {
                        background-color: white !important;
                    }

                    .input-group-sm .input-group-addon .fa {
                        font-size: 15px;
                    }
                </style>
                <div class="col-md-7 text-right sm-text-center header-right-container">
                    <ul class="mini-nav nomargin list-inline vpad">
                        <li class='bmargin'><span id='link207' class='bmargin'> </span></li>
                        <li class='bmargin'><a href='{{URL::to('login')}}' id='link208' class='rpad bmargin'>Login</a></li>
                        <li class='bmargin norpad'><a href='{{URL::to('register')}}' id='link210' class='btn btn_get_listed bold'>Join Today <i class="fa fa-chevron-right lmargin align-middle hidden-xs"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <form action="{{route('search')}}" class="form-inline website-search">
                        <div class="input-group input-group-sm bmargin sm-autosuggest">
                            <span class="input-group-addon hidden-md">
                                <i class="fa fa-search"></i>
                            </span>
                            <input type="text" placeholder="Keyword" value="" name="query" class=" member_search form-control input-sm" autocomplete="off">
                        </div>
                        <input type="submit" value="Search" class="btn btn-sm btn_search bmargin xs-btn-block bold">
                    </form>
                </div>
            </div>
        </div>
        <style>
            .go_live {
                display: none
            }
        </style>
        <style type='text/css'>
            .mobile-main-menu .hasChildren span a {
                padding: 0px;
            }

            .user_sidebar>img {
                width: 32px;
                height: 32px;
                position: absolute;
                z-index: 10;
                border-radius: 100px;
                top: -1px;
                object-fit: cover;
                left: -10px;
            }

            #member_sidebar_toggle img+.fa {
                display: none;
            }

            .main_menu,
            .user_sidebar {
                padding: 5px 8px;
                margin-right: 0;
            }

            .main_menu i,
            .user_sidebar i {
                font-size: 16px;
            }

            .navbar-nav li {
                float: none !Important;
            }

            .navbar-default {
                -webkit-transition: all .6s ease-in-out;
                -moz-transition: all .6s ease-in-out;
                -o-transition: all .6s ease-in-out;
                transition: all .6s ease-in-out;
            }

            .transparent_menu {
                background-color: rgba(208, 29, 21, 0.95) !important;
            }

            @media only screen and (max-width: 991px) {
                #popover {
                    display: none
                }
            }

            @media only screen and (max-width: 1100px) {
                .mobile-main-menu {
                    display: block !important
                }

                .navbar-toggle {
                    display: block
                }

                #bs-main_menu .nav {
                    display: none !important
                }
            }

            .mobile-main-menu {
                position: fixed;
                height: calc(100% - 50px) !important;
                width: 250px;
                background: rgb(25.5, 41.2, 88.2);
                z-index: 99999;
                right: -250px;
                top: 50px;
                display: none;
                -webkit-transition: all .6s ease-in-out;
                -moz-transition: all .6s ease-in-out;
                -o-transition: all .6s ease-in-out;
                transition: all .6s ease-in-out;
                overflow-y: auto !important;
                overflow-x: hidden !important;
            }

            .mobile-main-menu ul li i {
                color: rgb(253, 253, 253);
                cursor: pointer;
                float: right;
                padding: 13px;
            }

            .mobile-main-menu.opened {
                right: 0px !important;
            }

            .mobile-main-menu ul li a,
            .mobile-main-menu ul li span {
                display: inline-block;
                float: left;
                -webkit-touch-callout: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                padding: 10px 0px;
                width: 80%;
                width: calc(100% - 40px);
            }

            .mobile-main-menu .sidebar-nav li ul {
                height: 0px;
                overflow: hidden;
                list-style: none;
                color: rgb(253, 253, 253);
                padding-left: 10px;
            }

            .mobile-main-menu .sidebar-nav li.sub_open>ul {
                height: 100%;
            }

            .mobile-main-menu ul.sidebar-nav {
                position: absolute;
                width: 250px;
                margin: 0;
                padding: 0;
                list-style: none;
                font-size: 14px;
            }

            .mobile-main-menu .sidebar-nav>li {
                display: block;
                line-height: 20px;
                padding: 0 15px 0 20px;
            }

            .mobile-main-menu .sidebar-nav li a,
            .mobile-main-menu .sidebar-nav li span {
                text-decoration: none;
                color: rgb(253, 253, 253);
            }

            .mobile-main-menu .sidebar-nav li a i,
            .mobile-main-menu .sidebar-nav li span i {
                display: none;
            }
        </style>
        <div class="mobile-main-menu">
            <ul class="sidebar-nav">
                <li class=''><a href='index.html' id='link1'>Home</a></li>
                <li class=''>
                    <span id='link232'> About Us</span>
                    <ul>
                        <li class=''><a href='{{URL::to('about')}}' id='link233'>About</a></li>
                        <li class=''><a href='{{URL::to('our-team')}}' id='link246'>Meet the Team</a></li>
                        <li class=''><a href='{{URL::to('volunteer')}}' id='link314'>Volunteer with us</a></li>
                    </ul>
                </li>
                <li class=''>
                    <a href='#' id='link236'>Events</a>
                    <ul>
                        <li class=''><a href='{{URL::to('past-events')}}' id='link313'>Past Event</a></li>
                        <li class=''><a href='{{URL::to('upcoming-events')}}' id='link338'>Upcoming Event</a></li>
                    </ul>
                </li>
                @php 
                   
                   $categories=DB::table('categories')->get();
                @endphp
                <li class=''>
                    <a href='#' id='link227'>Category</a>
                    <ul>
                        @foreach($categories as $row)
                        <li class=''><a href='' id='link238'>{{$row->name}}</a></li>
                         @endforeach
                    </ul>
                </li>

                <li class='head_join'><a href='{{URL::to('register')}}' id=''>Join Us</a></li>
                <li class=''><a href='{{URL::to('contact-us')}}' id='link235'>Contact Us</a></li>
                <li class=''>
                    <a href='{{URL::to('member-zone')}}' id='link319'>Member Zone</a>
                </li>
            </ul>
        </div>
        <nav class="navbar navbar-default ">
            <div class="container container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed main_menu" data-toggle="collapse">
                        <i class="fa fa-bars fa-fw"></i> Menu
                    </button>
                </div>
                <div class="tablet-menu collapse navbar-collapse nopad" id="bs-main_menu">
                    <ul class="tablet-menu-ul nav navbar-nav nav-justified">
                        <li class=''><a href='{{URL::to('/')}}' id='link1'>Home</a></li>
                        <li class=''>
                            <span id='link232'> About Us</span>
                            <ul>
                                <li class=''><a href='{{URL::to('about')}}' id='link233'>About</a></li>
                                <li class=''><a href='{{URL::to('our-team')}}' id='link246'>Meet the Team</a></li>
                                <li class=''><a href='{{URL::to('volunteer')}}' id='link314'>Volunteer with us</a></li>
                            </ul>
                        </li>
                        <li class=''>
                            <a href='#' id='link236'>Events</a>
                            <ul>
                                <li class=''><a href='{{URL::to('past-events')}}' id=''>Past Event</a></li>
                                <li class=''><a href='{{URL::to('upcoming-events')}}' id=''>Upcoming Event</a></li>
                            </ul>
                        </li>
                        <li class=''>
                            <a href='#' id='link227'>Category</a>
                            <ul>

                                @foreach($categories as $row)

                                <li class=''><a href="{{route('category.post',$row->slug)}}" id='link238'>{{$row->name}}</a></li>
                                @endforeach
               
                            </ul>
                        </li>

                        <li class='head_join'><a href='{{route('register')}}' id='link231'>Join Us</a></li>
                        <li class=''><a href='{{URL::to('contact-us')}}' id='link235'>Contact Us</a></li>
                        <li class=''>
                            <a href='{{URL::to('member-zone')}}' id='link319'>Member Zone</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--CSS IF MENU IS FIXED TOP-->
    </div>
    @yield('content')

    <!-- End Content -->

    <div class="clearfix clearfix-lg footer-clear-element"></div>
    <!--
         IMPORTANT: This widget contains real Adsense code as a sample to show how this widget functions.  Please replace the current Adsense code below with your own code in order to generate revenue from this ad space.
         
         -->
    <div class="container clearfix text-center footer-banner-ad">
    </div>
    <style type='text/css'>
        .newsletter_row input[type="email"] {
            float: none;
            margin-left: auto;
            margin-right: auto;
            width: 62% !important;
        }
    </style>
    <div class="content-container newsletter_row">
        <div class="container text-center vpad">
            <div class="col-md-12 xs-nopad">
                <a data-toggle="modal" data-target="#newsletter_subscribe_modal" class="btn btn-lg newsletter_footer_button col-xs-12 col-md-6 nofloat fpad bold">
                    <div class="col-sm-6 nopad newsletter_button_left">
                        Join Our Newsletter
                    </div>
                    <div class="col-sm-6 nopad newsletter_button_right">
                        Click to Subscribe
                        <i class='fa fa-chevron-circle-right fa-fw'></i>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <ul class="footer_menu sm-text-center">
                    <li class='col-md-4'><span id='link353' class='head'> About </span>
                        <ul>
                            <li class=''><span id='link354'>{!!$config->about!!}</span></li>
                        </ul>
                    </li>
                    <li class='col-md-6'><span id='link355' class='head'> Contact Us</span>
                        <ul>
                            <li class=''><span id='link310'>
                                    <div itemscope itemtype="http://schema.org/WebSite">
                                        <meta itemprop="name" content="" id="sitename">
                                        <link href="//" itemprop="url" id="sitelink">
                                        <div class="list-social-links">
                                            <a class="network-icon contact" href="{{$config->email}}" title="Contact Us ">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                            <a class="network-icon facebook" itemprop="sameAs" href="{{$config->facebook_url}}" target="_blank" title=" Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a class="network-icon twitter" itemprop="sameAs" href="{{$config->twitter_url}}" target="_blank" title=" Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a class="network-icon linkedin" itemprop="sameAs" href="{{$config->linkedin_url}}" target="_blank" title=" LinkedIn">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                            <a class="network-icon youtube" itemprop="sameAs" href="{{$config->youtube_url}}" target="_blank" title=" YouTube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </span></li>
                        </ul>
                    </li>
                    <li class='col-md-2'><span id='link159' class='head'> Quick Links</span>
                        <ul>
                            <li class=''><a href='/about/privacy' id='link160'>Privacy Policy</a></li>
                            <li class=''><a href='/about/terms' id='link161'>Terms & Conditions</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 fpad fmargin small text-center footer_terms">
                &copy;  
                <a title="BDSOFT It Solutions" href="http://bdsoft.biz/">
                     2020 BDSOFT It Solutions | All rights reserved

            </div>
        </div>
    </div>
    <style type='text/css'>
        .scrollup {
            border-radius: 3px;
            width: 40px;
            height: 40px;
            opacity: 0.4;
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: none;
            background: rgba(119, 119, 119, 0.8);
            z-index: 1000000;
        }

        .scrollup i {
            font-size: 36px;
            color: white;
            position: relative;
            top: 0px;
            left: 10px;
        }
    </style>
    <div class="myModal modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body nohpad nobpad">
                    <button type="button" style="z-index:10;position:absolute;right:15px;" class="close hmargin" data-dismiss="modal">&times;</button>
                    <link rel="stylesheet" href="{{asset('frontend/css/bootstrapValidator.min.css')}}" />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="module nobmargin member-login-container">
                                <style type="text/css">
                                    label span.required {
                                        color: #B94A48;
                                    }

                                    span.help-inline,
                                    span.help-block {
                                        font-size: .9em;
                                    }
                                </style>
                                <form action="" id="member_login" method="post" labelwidth="100" labelpaddingtop="0.5em" enctype="multipart/form-data" form_action_type="redirect" form_action_div return_data_type="" name="member_login" class=" "><input type="hidden" name="sized" value="0" id="member_login-element-0" /><input type="hidden" name="form" value="myform" id="member_login-element-1" /><input type="hidden" name="formname" value="member_login" id="member_login-element-2" /><input type="hidden" name="dowiz" value="1" id="member_login-element-3" /><input type="hidden" name="save" value="1" id="member_login-element-4" /><input type="hidden" name="action" autocomplete="off" value="login" id="member_login-element-5" />
                                    <h2>Member Login</h2>
                                    <hr>
                                    <div class="form-group"><label class="vertical-label bd-email" for="member_login-element-8"><span class="required">* </span>Email Address</label><input type="email" name="email" required placeholder="name@yoursite.com" autocomplete="off" value class="form-control input-lg" id="member_login-element-8" /></div>
                                    <div class="form-group"><label class="vertical-label bd-password" for="member_login-element-9"><span class="required">* </span>Password</label><input type="password" name="pass" required placeholder="Enter Password" autocomplete="off" value class="form-control input-lg" id="member_login-element-9" /></div><span class="help-block bpad bmargin notmargin">Forgot your password? <a href="/login/retrieval">Click Here</a></span>
                                    <div class="form-actions"><input type="submit" value="Login Now" name class="btn btn-primary btn-lg btn-block " id="member_login-element-11" /></div>
                                    <div class="login-cta-buttons">
                                        <hr class="cta-hr">
                                        <li class='col-md-6 col-md-offset-3 nolpad sm-nopad nav'><a href='/join' id='link228' class='btn btn-danger btn-block sm-bmargin'>Not a Member? <span class="inline-block">Join Us Now</span></a></li>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    jQuery(document).ready(function() {
                                        jQuery("#member_login").bind("submit", function() {});
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type='text/css'>
        .input-group.normal-autosuggest input,
        .input-group.sm-autosuggest input,
        .input-group.md-autosuggest input {
            box-shadow: none;
        }

        .normal-autosuggest .twitter-typeahead,
        .sm-autosuggest .twitter-typeahead {
            display: inline-block;
            height: 25px;
            position: relative;
            width: 100%;
        }

        .normal-autosuggest .twitter-typeahead .tt-hint,
        .sm-autosuggest .twitter-typeahead .tt-hint {
            background: #fff !important;
            border: 1px solid #ccc !important;
            border-radius: 0 4px 4px 0;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset !important;
            color: transparent;
            left: 0;
            padding: 4px 11px;
            position: absolute;
            top: 0;
            width: 100%;
            font-size: 12px;
        }

        .normal-autosuggest.input-group-addon .fa,
        .sm-autosuggest .input-group-addon .fa {
            font-size: 12px
        }

        .md-autosuggest .twitter-typeahead {
            display: inline-block;
            height: 29px;
            position: relative;
            width: 100%;
        }

        .md-autosuggest .twitter-typeahead .tt-hint {
            height: 100%;
            background: #ffffff none repeat scroll 0 0 !important;
            border: 1px solid #cccccc !important;
            border-radius: 0 4px 4px 0;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset !important;
            color: rgba(0, 0, 0, 0);
            left: 0;
            padding: 6px 11px;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .large-autosuggest {
            background: #fff !important;
            border-radius: 6px;
        }

        .large-autosuggest input {
            width: 100% !important;
            box-shadow: none;
            border-radius: 6px;
        }

        .large-autosuggest .twitter-typeahead {
            display: inline-block;
            height: 41px;
            position: relative;
            width: 100%;
        }

        .large-autosuggest .twitter-typeahead .tt-hint {
            background: #fff !important;
            border: 1px solid #ccc !important;
            border-radius: 6px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset !important;
            color: transparent;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            font-size: 18px;
            height: 46px;
            line-height: 1.33333;
            padding: 10px 15px;
        }

        .tt-dataset .empty-message {
            display: none !important;
        }

        .twitter-typeahead .tt-query {
            background-color: #fff !important
        }

        .input-group.large-autosuggest span:first-child .tt-hint {
            border-radius: 0 !important;
        }

        span.tt-dropdown-menu {
            border: 1px solid #FCFCFC;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            width: 100% !important;
        }

        .tt-is-under-cursor a.suggest-link {
            background: #55ACEE;
        }

        .tt-is-under-cursor .media-heading,
        .tt-is-under-cursor .suggest-origin,
        .tt-is-under-cursor .location {
            color: #fff !important;
        }

        .tt-suggestion .media .media-body .suggest-origin {
            color: rgba(45, 91, 137, 0.9);
            padding: 1px 0;
            border-radius: 6px;
            font-weight: bold;
            line-height: 12px;
        }

        .tt-suggestion {
            background: #fff;
            border-bottom: 1px solid #eee;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        body .tt-suggestions .media.br-bottom img {
            max-width: 45px;
            height: auto;
        }

        body .tt-suggestions .media-body span {
            font-size: 10px;
        }

        body .tt-suggestions .media-body h4 {
            font-size: 12px;
            margin: 2px 0px;
            text-transform: capitalize;
        }

        a.suggest-link {
            padding: 3px 3px;
            display: block;
        }

        a.suggest-link img {
            border-radius: 3px;
            display: block;
            margin: 0 auto;
            max-height: 40px;
            width: auto;
        }

        .left-suggest-col {
            display: inline-block;
            vertical-align: middle;
            width: 33%;
        }

        .right-suggest-col {
            display: inline-block;
            padding-left: 1%;
            text-align: left;
            vertical-align: middle;
            width: 64%;
        }

        p.media-heading {
            color: #333;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 0;
        }

        p.suggest-origin {
            font-size: 10px;
            color: #333;
        }

        p.location {
            color: #333;
            font-size: 10px;
            margin: 5px 0;
        }

        body .tt-is-under-cursor a.suggest-link {
            background: #F7F7F7;
        }

        body .tt-is-under-cursor .media-heading,
        body .tt-is-under-cursor .suggest-origin,
        body .tt-is-under-cursor .location {
            color: #333 !important;
        }

        body .tt-is-under-cursor a.suggest-link[data-heading="heading"] {
            background: rgb(25.5, 41.2, 88.2);
        }

        /* --- all the novalue css --- */
        a.suggest-link .suggest-origin[data-state="novalue"] {
            display: none;
        }

        a.suggest-link .location[data-state="novalue"] {
            display: none;
        }

        a.suggest-link img[data-state="novalue"] {
            display: none;
        }

        a.suggest-link .suggest-origin[data-state="heading"] {
            display: none;
        }

        a.suggest-link .media-heading[data-heading="heading"] {
            color: rgb(253, 253, 253) !important;
            font-weight: bold;
            padding: 4px;
            font-size: 13px;
        }

        .left-suggest-col[data-photo="novalue"],
        .left-suggest-col[data-photo="undefined"] {
            display: none;
        }

        .right-suggest-col[data-photo="novalue"],
        .right-suggest-col[data-photo="undefined"] {
            width: 100%;
        }

        a.suggest-link[href="novalue"] {
            cursor: default !important;
            pointer-events: none;
        }

        a.suggest-link[data-heading="heading"] {
            background-color: rgb(25.5, 41.2, 88.2);
        }

        div.content-shell {
            overflow: inherit;
        }

        span.tt-dropdown-menu div {
            float: none;
        }

        .tt-menu {
            border-radius: 0 0 6px 6px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 100%;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/corejs-typeahead/0.11.1/typeahead.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var member_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/1,users_data,Listings,1,1,1,1,1,3|88,list_professions,Main Categories,1,0,1,1,1,3|89,list_services,Sub Categories,1,0,1,1,1,3?tID=16&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var member_searchDataSrc = member_searchEngine.initialize();

            member_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.member_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: member_searchEngine.ttAdapter(),
                limit: 10,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.member_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var photos_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/10,users_portfolio_groups,Photo Albums,1,1,1,1,1,3?tID=17&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var photos_searchDataSrc = photos_searchEngine.initialize();

            photos_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.photos_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: photos_searchEngine.ttAdapter(),
                limit: 5,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.photos_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var blogs_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/14,data_posts,Blog Articles,1,1,1,1,1,3?tID=18&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var blogs_searchDataSrc = blogs_searchEngine.initialize();

            blogs_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.blogs_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: blogs_searchEngine.ttAdapter(),
                limit: 5,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.blogs_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var articles_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/15,data_posts,Member Articles,1,1,1,1,1,3?tID=19&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var articles_searchDataSrc = articles_searchEngine.initialize();

            articles_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.articles_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: articles_searchEngine.ttAdapter(),
                limit: 5,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.articles_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var audio_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/5,data_posts,Audio Files,1,1,1,1,1,3?tID=20&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var audio_searchDataSrc = audio_searchEngine.initialize();

            audio_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.audio_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: audio_searchEngine.ttAdapter(),
                limit: 5,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.audio_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var videos_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/13,data_posts,Videos,1,1,1,1,1,3?tID=21&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var videos_searchDataSrc = videos_searchEngine.initialize();

            videos_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.videos_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: videos_searchEngine.ttAdapter(),
                limit: 5,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.videos_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var property_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/12,users_portfolio_groups,Properties,1,1,1,1,1,3?tID=22&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var property_searchDataSrc = property_searchEngine.initialize();

            property_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.property_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: property_searchEngine.ttAdapter(),
                limit: 5,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.property_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var products_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/11,users_portfolio_groups,Products,1,1,1,1,1,3?tID=23&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var products_searchDataSrc = products_searchEngine.initialize();

            products_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.products_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: products_searchEngine.ttAdapter(),
                limit: 5,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.products_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var jobs_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/9,data_posts,Job Listings,1,1,1,1,1,3?tID=24&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var jobs_searchDataSrc = jobs_searchEngine.initialize();

            jobs_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.jobs_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: jobs_searchEngine.ttAdapter(),
                limit: 5,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.jobs_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var events_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/8,data_posts,Events,1,1,1,1,1,3?tID=25&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var events_searchDataSrc = events_searchEngine.initialize();

            events_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.events_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: events_searchEngine.ttAdapter(),
                limit: 5,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.events_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var coupons_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/7,data_posts,Coupons,1,1,1,1,1,3?tID=26&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var coupons_searchDataSrc = coupons_searchEngine.initialize();

            coupons_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.coupons_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: coupons_searchEngine.ttAdapter(),
                limit: 5,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.coupons_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var classifieds_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/6,users_portfolio_groups,Classifieds,1,1,1,1,1,3?tID=27&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var classifieds_searchDataSrc = classifieds_searchEngine.initialize();

            classifieds_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.classifieds_search').typeahead({
                minLength: 2,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: classifieds_searchEngine.ttAdapter(),
                limit: 5,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.classifieds_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var global_searchEngine = new Bloodhound({
                initialize: false,
                datumTokenizer: function(d) {
                    return Bloodhound.tokenizers.whitespace(value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/api/suggest/json/get/6,users_portfolio_groups,Classifieds,1,1,,,,3|10,users_portfolio_groups,Photo Albums,1,1,,,,3|8,data_posts,Events,1,1,,,,3|9,data_posts,Job Listings,1,1,,,,3|12,users_portfolio_groups,Properties,1,1,,,,3|11,users_portfolio_groups,Products,1,1,,,,3|7,data_posts,Coupons,1,1,,,,3|13,data_posts,Videos,1,1,,,,3|5,data_posts,Soundclouds,1,1,,,,3|14,data_posts,Blog Articles,1,1,,,,3|15,data_posts,Member Articles,1,1,,,,3|1,users_data,Listings,1,1,,,,3?tID=558&q=%QUERY',
                    wildcard: '%QUERY',
                    filter: function(response) {

                        if (response != null) {
                            //var response = response.slice(1);
                            $.each(
                                response,
                                function(key, value) {
                                    response[key]['value'] = decodeHtml(value['value']);
                                    response[key]['comes_f'] = decodeHtml(value['comes_f']);
                                    response[key]['location'] = decodeHtml(value['location']);

                                    if (response[key]['value'].indexOf('-/-') >= 0) {
                                        var splitResult = response[key]['value'].split('-/-');
                                        response[key]['value'] = splitResult[0];
                                    }
                                }
                            );

                        } else {
                            response = {
                                error: "null"
                            };
                        }

                        return response;
                    }
                }
            });
            var global_searchDataSrc = global_searchEngine.initialize();

            global_searchDataSrc
                .done(function() {
                    /*console.log('Autosuggestions engine initialized.'); */ })
                .fail(function() {
                    /*console.log('err, something went wrong while initializing autosuggestions engine:(');*/ })

            $('.global_search').typeahead({
                minLength: 3,
                highlight: true,
                hint: false
            }, {
                display: 'value',
                source: global_searchEngine.ttAdapter(),
                limit: 3,
                templates: {
                    empty: [
                        '<div class="empty-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    notFound: [
                        '<div class="notFound-message">',
                        'Result not found',
                        '</div>'
                    ].join(" "),
                    suggestion: function(data) {

                        if (data == "null") {
                            strTemplate = '<div class="empty-message">Result not found</div>';

                        } else {
                            strTemplate = '<a class="suggest-link" href="' + data.link + '" data-state="' + data.link + '" data-heading="' + data.comes_f + '"> <div class="left-suggest-col" data-photo="' + data.photo + '"> <img src="' + data.photo + '" data-state="' + data.photo + '"> </div> <div class="right-suggest-col" data-photo="' + data.photo + '"> <p class="media-heading" data-state="' + data.value + '" data-heading="' + data.comes_f + '">' + data.value + '</p> <p class="suggest-origin" data-state="' + data.comes_f + '">' + data.comes_f + '</p> <p class="location" data-state="' + data.location + '">' + data.location + '</p> </div> </a> ';

                            if ((data.link == undefined) || (data.link == "") || (data.link == "novalue")) {
                                strTemplate = strTemplate.replace(/href=".*?"/, "href='#'");
                            }

                            if ((data.photo == undefined) || (data.photo == "") || (data.photo == "novalue")) {
                                strTemplate = strTemplate.replace(/<img src=".*?>/, "");
                            }
                        }

                        return strTemplate;
                    }
                },
            }).on('typeahead:selected', function(obj, datum) {
                /*
                console.log(obj);
                console.log(datum);
                */
            });

            $('.global_search').each(function() {
                var inputWidth = $(this).outerWidth();
                $(this).siblings('.tt-dropdown-menu').css('width', inputWidth + 'px');
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/1.9.41/autoNumeric.min.js" integrity="sha384-oZIn3Piso9kPFxWDbhbrMuN3hdeb25vGVnkLCJXlD4xKEduPc4stQvKLo0FSDILQ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.2/sweetalert2.min.css" integrity="sha384-p19gDwnBLB4K+iyz/LFPYGAHbBZ5n5PpGwxF0fQek+47PfjruC8xamX+nvuWmjIk" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.2/sweetalert2.min.js" integrity="sha384-Ei09WS56m6BfYmxv57wehjDKQVJXtPXB0ZIcbsCT+4WIn5CDY2BgIN8+pO/DR/0F" crossorigin="anonymous"></script>
    <script>
        function clearContent(thisObj) {
            var size;
            if (thisObj.hasClass('input-sm') || thisObj.parents('.input-group').hasClass('input-group-sm')) {
                size = "small";
            } else if (thisObj.hasClass('input-lg') || thisObj.parents('.input-group').hasClass('large-autosuggest')) {
                size = "large";
            } else {
                size = "medium";
            }
            if (!thisObj.parent().hasClass('input_wrapper')) {
                if (thisObj.parent().hasClass('input-group-sm')) {
                    thisObj.wrap('<span class="input-group-sm input_wrapper"></span>');
                } else if (thisObj.parent().hasClass('input-group-lg')) {
                    thisObj.wrap('<span class="input-group-lg input_wrapper"></span>');
                } else {
                    thisObj.wrap('<span class="input_wrapper"></span>');
                }
            }
            if (thisObj.val() != "") {
                if (thisObj.hasClass('googleSuggest')) {
                    thisObj.parent().find('.fill_location').remove();
                }
                if (!thisObj.parent().find('.clear_content').length) {
                    thisObj.parent().append('<span class="clear_content ' + size + '"><i class="fa fa-times-circle" aria-hidden="true"></i></span>');
                }
            }
        }
        $('.sm-autosuggest input, .googleSuggest, .large-autosuggest input, .md-autosuggest input, .normal-autosuggest input, .google-writen-location').keyup(function() {
            clearContent($(this));
        });

        $(document).ready(function() {
            $('.sm-autosuggest input, input.googleSuggest, .large-autosuggest input, .md-autosuggest input, .normal-autosuggest input, .google-writen-location').each(function() {
                clearContent($(this));
            })
        })

        $(document).on('click', '.clear_content', function() {
            $(this).parent().find('input').val('');
            clearContent($(this).parent().find('input'));
            $(this).remove();

        });
    </script>
    <a href="#" class="scrollup"><i class="fa fa-caret-up"></i></a>
    <script>
        $(document).ready(function() {
            $('.progress .progress-bar').progressbar({
                display_text: 'fill'
            });
            $(window).scroll(function() {

                if ($(this).scrollTop() > 600) {
                    $('.scrollup').fadeIn();

                } else {
                    $('.scrollup').fadeOut();
                }
            });
            $('.scrollup').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
            $('#cropButton').click(function() {
                var iframe = $("#cropiFrame");
                iframe.attr("src", iframe.data("src"));
            });
        });
    </script>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datetimepicker.min.css')}}">
    <script defer src="{{asset('frontend/js/moment-with-locales.min.js')}}"></script>
    <script defer src="{{asset('frontend/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('input[field_type="date"]').datetimepicker({
                format: "DD/MM/YYYY"
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            //function to get url GET parameters
            function getUrlParameter(sParam) {
                var sPageURL = window.location.search.substring(1);
                var sURLVariables = sPageURL.split('&');

                for (var i = 0; i < sURLVariables.length; i++) {
                    var sParameterName = sURLVariables[i].split('=');

                    if (sParameterName[0] == sParam) {
                        return decodeURIComponent(sParameterName[1]);
                    }
                }
            }

            //stating variables for the first initialize of the sidebar map
            var geocoder;
            var cachedSelectedOption = [];

            //function that initializes the creation of the google map
            function initialize() {
                //This piece of code will create an autosuggest for every input with the class "googleSuggest"
                var counter = 1;
                var inputsArray = [];
                $(".googleSuggest").each(function() {
                    //get the id from the input to be the unique identifier for each autocomplete
                    var inputId = $(this).attr("id");
                    var inputElement = $(this);
                    inputsArray[counter] = /** @type {HTMLInputElement} */ (
                        document.getElementById('' + inputId));
                    var localizedMainCoutry = 'IN';
                    var inputOptions = {
                        fields: ['address_components', 'formatted_address', 'geometry', 'icon', 'name'],
                        types: ['geocode']
                    }
                    if (localizedMainCoutry != "") {
                        inputOptions.componentRestrictions = {
                            country: localizedMainCoutry
                        }
                    }

                    var autocomplete = new google.maps.places.Autocomplete(inputsArray[counter], inputOptions);
                    google.maps.event.addListener(autocomplete, 'place_changed', function() {
                        cachedSelectedOption = [];
                        cachedSelectedOption.push(autocomplete.getPlace());
                        cachedSelectedOption[0]['typed_location'] = inputElement.val();

                        if (cachedSelectedOption[0]['place_id'] == undefined) {
                            cachedSelectedOption = [];
                            var emptyObj = {
                                'typed_location': ''
                            };
                            cachedSelectedOption.push(emptyObj);
                        }
                    });
                    //the code that prevents the submition when hit enter on a google location autocomplete item
                    google.maps.event.addDomListener(inputsArray[counter], 'keydown', function(e) {

                        if (e.keyCode == 13) {
                            var pacCounter = 0;
                            //need to run a loop to check each pac container
                            $('.pac-container').each(function() {

                                if ($(this).css("display") != "none") {
                                    pacCounter++;
                                }
                            });
                            if (pacCounter > 0) {
                                e.preventDefault();
                            }
                        }
                    });
                    counter++;
                });
            }

            initialize();
            //triggers every time a form with the id website-search is trigered
            $('.website-search').submit(function(e) {
                var currentForm = $(this);
                var locationInput = $(this).find(".googleLocation");

                //checks if the location input is filled when submitting the search form
                if (locationInput.val() != "" && typeof locationInput.val() != 'undefined') {
                    e.preventDefault();
                    //this variable has the main country of the site
                    var countryRegion = "IN";
                    var localizedSearchSetting = "1";
                    var form = currentForm;
                    var urlGET = form.serialize();
                    var formActionUrl = form.attr("action");
                    var locationValue = locationInput.val();

                    //if the setting localized search is equal to 1 then the region parameter will be sent with the main country of the site
                    if (localizedSearchSetting != 1) {
                        countryRegion = "";
                    }
                    if (cachedSelectedOption[0] == undefined) {
                        var emptyForm = {
                            'typed_location': ''
                        };
                        cachedSelectedOption.push(emptyForm);
                    }
                    if (locationValue != cachedSelectedOption[0]['typed_location']) {
                        geocoder = new google.maps.Geocoder();
                        geocoder.geocode({
                            'address': locationValue,
                            'region': countryRegion
                        }, function(results, status) {

                            //if the google response of the geocoding was successful it will use that info to build the url for the new search
                            if (status == google.maps.GeocoderStatus.OK) {
                                parseInfoToSearch(results, urlGET, formActionUrl);

                            } else {
                                var urlPath = formActionUrl;
                                var redirect = urlPath + "?" + urlGET;
                                //will redirect the page using the new url that has been constructed
                                window.location.href = redirect;
                            }
                        });

                    } else {
                        parseInfoToSearch(cachedSelectedOption, urlGET, formActionUrl);
                    }
                }
            });
        });

        function parseInfoToSearch(results, urlGET, formActionUrl) {
            var parameters = {};
            var adComLength = results[0].address_components.length;
            var addressComponentsArray = [];

            //loop that will build the array with the address components and will get the short name of country and administrative area level 1
            for (var i = 0; i < adComLength; i++) {

                if (results[0].address_components[i]['types'][0] == "country") {
                    parameters.country_sn = results[0].address_components[i]['short_name'];
                }
                if (results[0].address_components[i]['types'][0] == "administrative_area_level_1") {
                    parameters.adm_lvl_1_sn = results[0].address_components[i]['short_name'];
                }
                if (results[0].address_components[i]['types'][0] == "administrative_area_level_2") {
                    parameters.county_sn = results[0].address_components[i]['short_name'];
                }
                if (results[0].address_components[i]['types'][0] == "locality" || results[0].address_components[i]['types'][0] == "colloquial_area") {
                    parameters.city = results[0].address_components[i]['long_name'];
                }
                if (results[0].address_components[i]['types'][0] == "postal_code" || results[0].address_components[i]['types'][0] == "postal_code_prefix") {
                    parameters.postal_code = results[0].address_components[i]['long_name'];
                }
            }

            parameters.location_type = results[0].types[0];
            if (parameters.adm_lvl_1_sn != '') {
                parameters.stateSearch = parameters.adm_lvl_1_sn;
            }
            if (parameters.country_sn == "GB") {
                delete parameters.adm_lvl_1_sn;
            }

            //will check if the response had the bounds parameters
            //if it had it will add the south west and north east parameters to the new url
            if (results[0].geometry.hasOwnProperty('bounds') || results[0].geometry.hasOwnProperty('viewport')) {

                if (results[0].geometry.hasOwnProperty('bounds')) {
                    var boundsResponse = results[0].geometry.bounds;

                } else {
                    var boundsResponse = results[0].geometry.viewport;
                }
                parameters.swlat = boundsResponse.getSouthWest().lat();
                parameters.nelat = boundsResponse.getNorthEast().lat();
                parameters.swlng = boundsResponse.getSouthWest().lng();
                parameters.nelng = boundsResponse.getNorthEast().lng();

                //if there were not bounds parameters in the response it will send the parameter fsearch as radius so a radius search will be performed because of lack of info for this location
            } else {
                parameters.fsearch = "radius";
            }
            var locationCenterResponse = results[0].geometry.location;
            parameters.lat = locationCenterResponse.lat();
            parameters.lng = locationCenterResponse.lng();
            parameters.faddress = results[0].formatted_address;
            parameters.place_id = results[0].place_id;
            var formatParameters = $.param(parameters);
            urlGET = urlGET + "&" + formatParameters;
            var urlPath = formActionUrl;
            var redirect = urlPath + "?" + urlGET;
            //will redirect the page using the new url that has been constructed
            window.location.href = redirect;
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            //check if a map has been loaded
            if ($('#map-canvas').length > 0) {
                var cssHideLogo = "<style>.pac-container:after {  /* Disclaimer: not needed to show 'powered by Google' if also a Google Map is shown */background-image: none !important;height: 0px;}</style>";
                $('body').append(cssHideLogo);

            } else {
                var cssHideLogo = "<style>.pac-container:after {  /* Disclaimer: not needed to show 'powered by Google' if also a Google Map is shown */background-image: block !important;height: 16px;}</style>";
                $('body').append(cssHideLogo);
            }



            if (geocodeVisitorsSetting == 1 && geocodingMethod === "IP") {
                populateSearchFields();
            }


            populateSearchFields();
        });
        var geocodeVisitorsSetting = '0';
        var geocodingMethod = 'HTML5';
        //check the advanced setting "geocode_visitor_default" if set to 1 will override the "location_value" values to the formatted desire address from the google reverse geocoding response
        function populateSearchFields() {
            var prePopulateLocationSetting = '0';
            var geolocationMethod = 'HTML5';

            //if set to one will get the lat and lng to do reverse geocoding
            if (prePopulateLocationSetting == 1 && (geolocationMethod === "HTML5" || geolocationMethod === "IP") && (vlat !== '' && vlon !== '')) {
                var visitorLatLng = new google.maps.LatLng(parseFloat(vlat), parseFloat(vlon));
                var visitorGeocoder = new google.maps.Geocoder();
                var formattedAddress = [];
                var preFormattedStructure = {
                    "locality": "long_name",
                    "administrative_area_level_2": "long_name",
                    "administrative_area_level_1": "long_name",
                    "country": "long_name"
                };
                visitorGeocoder.geocode({
                    'latLng': visitorLatLng
                }, function(results, status) {
                    //if the google response of the geocoding was successful it will use that info to build the url for the new search
                    if (status == google.maps.GeocoderStatus.OK) {
                        $.each(preFormattedStructure, function(findex, fvalue) {
                            $.each(results[0].address_components, function(rindex, rvalue) {
                                if (rvalue.types[0] == findex) {
                                    formattedAddress.push(rvalue.long_name);
                                }
                            });
                        });
                        $('.googleSuggest').each(function() {
                            if ($(this).val() == '') {
                                if (formattedAddress.length > 0) {
                                    $(this).val(formattedAddress.join(', '));
                                    clearContent($(this));
                                }
                            }
                        });
                    } else {
                        $('.googleSuggest').each(function() {
                            $(this).val('');
                        });
                    }
                });
            }
        };
        var vlon = '';
        var vlat = '';

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    $('.fill_location.clicked').popover({
                        content: 'Your Local browser settings have prevented location targeting',
                        container: 'body'
                    });
                    $('.fill_location.clicked').popover('toggle');
                    setTimeout(function() {
                        $('.fill_location.clicked').popover('hide');
                        $('.fill_location.clicked').removeClass('clicked');
                    }, 2000);
                    break;
                case error.POSITION_UNAVAILABLE:
                    console.log("Location information is unavailable.");
                    break;
                case error.TIMEOUT:
                    console.log("The request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    console.log("An unknown error occurred.");
                    break;
            }
        }
        if (navigator.geolocation) {
            if ($(".googleSuggest")[0]) {
                $(document).on('click', '.fill_location', function() {
                    $(this).addClass('clicked');
                    var startPos;
                    navigator.geolocation.getCurrentPosition(function(position) {
                        startPos = position;
                        vlat = startPos.coords.latitude;
                        vlon = startPos.coords.longitude;
                        $.get("/api/data/html/get/data_widgets/widget_name", {
                            "vlat": vlat,
                            "vlon": vlon,
                            "name": "Website - Save Coordinates Session"
                        }).done(function(data) {});
                        populateSearchFields();
                    }, showError);
                })
                window.onload = function() {

                };
            }
        } else {
            console.log('Geolocation is not supported for this Browser/OS version yet.');
        }
    </script>
    <link href="{{asset('frontend/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <script src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>
    <script>
        $(document).ready(function(e) {
            $('.eventPicker').selectpicker({
                size: 6,
                width: '100%'
            });

            function clean() {
                $('.eventform-con .eventPicker').selectpicker('val', ' ');
                $('.eventform-con .eventPicker').selectpicker('deselectAll');
                $('.eventform-con .eventPicker').selectpicker('refresh');
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.navbar-header .navbar-toggle.main_menu').click(function() {
                $('.mobile-main-menu').toggleClass('opened');
            });
            $('.mobile-main-menu .sidebar-nav').find('li').each(function() {
                $(this).addClass('hasChildren');
                if ($(this).children('ul').length > 0) {
                    $(this).prepend('<i class="fa fa-plus" aria-hidden="true"></i>');
                    $(this).find('a').after('<div class="clearfix"></div>');
                    $(this).find('span').after('<div class="clearfix"></div>');
                }
                $(this).append('<div class="clearfix"></div>');
            });

            $('.mobile-main-menu .sidebar-nav li i').click(function() {
                if ($(this).parent().children('ul').length > 0) {
                    $(this).parent().toggleClass('sub_open');
                }
                if ($(this).hasClass('fa-plus')) {
                    $(this).switchClass('fa-plus', 'fa-minus');
                } else {
                    $(this).switchClass('fa-minus', 'fa-plus');
                }
            });
        })

        if ($(window).width() > 740 && $(window).width() < 1100) {

            $(document).ready(function() {
                $('.tablet-menu .tablet-menu-ul').find('li').each(function() {

                    if ($(this).children('ul').length > 0) {
                        $(this).prepend('<i class="fa fa-plus tablet-fa" aria-hidden="true"></i>');
                        $(this).find('a').after('<div class="clearfix"></div>');
                        var this_link = $(this).children('a').text().replace(/[^\x00-\x7F]/g, "");;
                        $(this).children('a').html(this_link);
                        $(this).find('span').after('<div class="clearfix"></div>');
                    }
                    $(this).append('<div class="clearfix"></div>');
                });

                $('.tablet-menu .tablet-menu-ul li i').click(function() {

                    if ($(this).parent().children('ul').length > 0) {
                        $(this).parent().toggleClass('sub_open');

                        if ($(this).siblings("ul").hasClass('tablet-block')) {
                            $(this).siblings("ul").switchClass('tablet-block', 'tablet-none');
                        } else {
                            $(this).siblings("ul").addClass("tablet-block");

                            if ($(this).siblings("ul").hasClass('tablet-none')) {
                                $(this).siblings("ul").removeClass('tablet-none')
                            }

                            if ($(this).parent().siblings().children('ul').hasClass('tablet-block')) {
                                $(this).parent().siblings().children('ul').switchClass('tablet-block', 'tablet-none');
                                $(this).parent().siblings().children('i').switchClass('fa-minus', 'fa-plus');
                            }

                            if ($(this).parent().siblings().children('ul').children().children('ul').hasClass('tablet-block')) {
                                $(this).parent().siblings().children('ul').children().children('ul').switchClass('tablet-block', 'tablet-none');
                                $(this).parent().siblings().children('ul').children().children('i').switchClass('fa-minus', 'fa-plus');
                            }

                            if ($(this).siblings('ul').children('ul').children().children('ul').hasClass('tablet-block')) {
                                $(this).siblings('ul').children('ul').children().children('ul').switchClass('tablet-block', 'tablet-none');
                                $(this).siblings('ul').children('ul').children().children('i').switchClass('fa-minus', 'fa-plus');
                            }

                        }

                    }

                    if ($(this).hasClass('fa-plus')) {
                        $(this).switchClass('fa-plus', 'fa-minus');
                    } else {
                        $(this).switchClass('fa-minus', 'fa-plus');
                    }
                });
            })
        }
    </script>
    <script>
        $(document).ready(function() {
            var i;
            var imageRatio = 0.5625;
            for (i = 0; i < 16; i++) {

                var sectionid = ".homepage-section-" + i + " .pic";
                var calc = Math.floor($(sectionid).width() * imageRatio);
                $(sectionid).css({
                    'height': calc + 'px'
                });

                var spanid = ".homepage-section-" + i + " .pic .pic-caption";
                var calc2 = $(sectionid).height() - 42;
                $(spanid).css({
                    'top': calc2 + 'px'
                });
            }
        });
    </script>
    <script>
        $('#captchaContainer').removeClass('form-control ');
        $(".website_url_field").keyup(function() {
            var fieldName = $(this).attr('name');
            $(this).val($(this).val().replace(/\s+/g, ''));
            $('#myform').formValidation('revalidateField', fieldName);
        });
    </script>
    <script>
        $('#newsletter input[name="email"]').on('keypress', function() {
            $("#newsletter > .gdpr_consent_email").show();
        });
        $('#newsletter_signup_footer input[name="email"]').on('keypress', function() {
            $("#newsletter_signup_footer > .gdpr_consent_email").show();
        });
    </script>
    <script type="text/javascript">
        var onloadCallback = function() {
            var recaptchas = document.querySelectorAll('div[class=g-recaptcha]');

            for (i = 0; i < recaptchas.length; i++) {
                grecaptcha.render(recaptchas[i].id, {
                    'sitekey': '6LeahAEVAAAAAJDhHMPNuyebzjNJCAMEsM9hwjs9'
                });
            }
        }
    </script>
    <script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=en'></script>
    <script>
        function respuesta() {
            var checkedTextArea = document.getElementsByClassName('g-recaptcha');
            var rcap = document.getElementsByTagName('recaptcha');
            for (var i = 0; i < checkedTextArea.length; i++) {
                if (checkedTextArea[i].value != '') {
                    for (var index = 0; i < rcap.length; index++) {
                        rcap[index].setAttribute("value", "checked");
                    }
                }
            }
        }

        $("input[type=submit]").click(function() {
            respuesta();
        });
    </script>
    <link rel="stylesheet" href="{{asset('frontend/css/formValidation.min.css')}}" />
    <script src="{{asset('frontend/js/formValidation.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        function decodeHtml(html) {
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        }
    </script>

    <div class="modal fade" id="newsletter_subscribe_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h3>
                                Join Our Newsletter
                            </h3>
                            <hr>
                            <div class="newsletter_modal_form_container">
                                <style type="text/css">
                                    label span.required {
                                        color: #B94A48;
                                    }

                                    span.help-inline,
                                    span.help-block {
                                        font-size: .9em;
                                    }
                                </style>
                                <form action="{{route('subscriber.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Enter email address" autocomplete="off" class="form-control control-group form-control" />
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" name class="btn btn-success btn-block btn-lg  bold " id="newsletter-element-11">Subscribe Now</button>
                                    </div>
                                </form>

                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <link rel="stylesheet" href="{{asset('frontend/css/bootstrapValidator.min.css')}}" />

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myform').bootstrapValidator({
                "framework": "bootstrap",
                "fields": {
                    "email": {
                        "validators": {
                            "notEmpty": {
                                "message": "Please enter a value"
                            },
                            "emailAddress": {
                                "message": "Please enter a valid email address"
                            }
                        }
                    },
                    "pass": {
                        "validators": {
                            "notEmpty": {
                                "message": "Please enter a value"
                            }
                        }
                    }
                },
                "message": "Default Error",
                "feedbackIcons": {
                    "valid": "glyphicon glyphicon-ok",
                    "invalid": "glyphicon glyphicon-remove",
                    "validating": "glyphicon glyphicon-refresh"
                }
            }).on('success.form.bv', function(e) {
                // Prevent form submission
                e.preventDefault();
                var values = $(this).serialize();
                var $form = $(e.target),
                    validator = $form.data('bootstrapValidator');
                $("#notification").html('Processing Request...').removeClass("hidden");
                $.ajax({
                    url: $(this).attr('action'),
                    type: "post",
                    data: values,
                    dataType: "json",
                    success: function(data) {
                        var message = data['message'];

                        if (data["result"] == "success") {
                            $("#notification").html(message)
                                .addClass("alert-success")
                                .removeClass("alert-danger")
                                .removeClass("alert-warning")
                                .fadeIn();
                            $form.bootstrapValidator('disableSubmitButtons', false)
                                .bootstrapValidator('resetForm', true);

                            if (data["redirect_url"] != "") {
                                window.location = data["redirect_url"];
                            }

                        } else {
                            $("#notification").html(message)
                                .addClass("alert-danger")
                                .removeClass("alert-success")
                                .removeClass("alert-warning")
                                .fadeIn();
                            $form.bootstrapValidator('disableSubmitButtons', false)
                                .bootstrapValidator('resetForm', true);
                        }
                    },
                    error: function(e) {
                        $("#notification").html('A connection error occurred while saving. Please try to save again.');
                        $("#notification").addClass("alert-warning");
                    }
                });
            })
        });

        function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');

            for (var i = 0; i < sURLVariables.length; i++) {
                var sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] == sParam) {
                    return sParameterName[1];
                    break;
                }
            }
        }
        var myLocation = window.location;
        var retrievalUrl = myLocation['pathname'].split("/").pop();
        var errorUrl = getUrlParameter('error');
        var warningMsg = '<div id="warningMsg" class="bubble"><img src="/images/alert-icon.png"/><span> Please log in to access this website.</span></div>';
        var errorMsg = '<div id="top-error" class="bubble"><img src="/images/error-icon.png" /><span> The email address or password is not valid.</span></div>';
        var passErrorMsg = '<div id="top-password" class="bubble"><img src="/images/error-icon.png" /><span> The email address entered does not exist.</span></div>';

        if (retrievalUrl == 'retrieval') {
            $('li.tab1').removeClass('active');
            $('li.tab2').addClass('active');
        }
        $('#showMessage').on('click', function() {
            $('#showMessage').html('');
        });
        if (errorUrl == 'The%20email%20address%20you%20entered%20does%20not%20match%20our%20records.') {
            $('#showMessage').html(passErrorMsg);
            $('li.active').removeClass('active');
            $('li.notActive').removeClass('notActive').addClass('active');
        }
        if (errorUrl == 'You%20must%20be%20logged%20in%20to%20access%20this%20page') {
            $('#showMessage').html(warningMsg);
            $('li.active').removeClass('active');
            $('li.notActive').removeClass('notActive').addClass('active');
        }
    </script>
    <script>
        var pathname = window.location.pathname;
        pathname = pathname.split("/");
        pathLength = pathname.length - 1;

        if (pathname[pathLength] == "retrieval") {
            var multipleEmailChecker = 0;
            //check that there are not multiple users with the requested email for password reseting
            $('#password_retrieval').submit(function(e) {
                var currentEmail = $('input[name="email_r"]').val();

                if (multipleEmailChecker == 0) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    var mecResponseArray = [];
                    $.ajax({
                        url: "/api/widget/json/get/Bootstrap%20Theme%20-%20Member%20Login%20Page",
                        type: "POST",
                        dataType: "json",
                        data: {
                            "action": "check_email_duplication",
                            'sent_email': currentEmail
                        },
                        success: function(data) {
                            mecResponseArray.push(data);
                        },
                        error: function(data) {
                            console.log("error");
                            console.log(data);
                        }
                    });
                    var mexInter = setInterval(function() {

                        if (mecResponseArray.length == 1) {
                            clearInterval(mexInter);

                            if (mecResponseArray[0]['status'] == "success") {
                                multipleEmailChecker = 1;
                                $('#password_retrieval').submit();

                            } else {
                                swal({
                                    title: mecResponseArray[0]['title'],
                                    type: mecResponseArray[0]['status'],
                                    html: mecResponseArray[0]['message'],
                                });
                            }
                        }
                    }, 400);
                }
            });
        }
    </script>
    <script type="text/javascript">
        var counterSubmit = 0;
        $(document).ready(function() {
            $('#member_login').formValidation({
                "framework": "bootstrap",
                "fields": {
                    "email": {
                        "validators": {
                            "notEmpty": {
                                "message": "Please enter a value"
                            },
                            "emailAddress": {
                                "message": "Please enter a valid email address"
                            }
                        }
                    },
                    "pass": {
                        "validators": {
                            "notEmpty": {
                                "message": "Please enter a value"
                            }
                        }
                    }
                }
            }).on('success.form.fv', function(e, fvdata) {

                // Prevent form submission
                e.preventDefault();
                $form = $(e.target),
                    fv = $form.data('formValidation');
                var values = $(this).serialize();


                if (!$(this).attr("action")) {
                    var action = '';

                } else {
                    var action = $(this).attr("action");
                }
                if (!$(this).attr("method")) {
                    var method = 'post';

                } else {
                    var method = $(this).attr("method");
                }
                if (!$(this).attr("form_action_type")) {
                    var form_action_type = 'notification';

                } else {
                    var form_action_type = $(this).attr("form_action_type");
                }
                if (!$(this).attr("form_action_div")) {
                    var form_action_div = '#first_container';

                } else {
                    var form_action_div = $(this).attr("form_action_div");
                }
                if (!$(this).attr("return_data_type")) {
                    var return_data_type = 'json';

                } else {
                    var return_data_type = $(this).attr("return_data_type");
                }
                if ($("#member_login-notification").html() != "") {
                    $("#member_login-notification").remove();
                }
                if ($(this).find('input[type="submit"]').length > 0) {
                    $(this).find('input[type="submit"]').before('<div id="member_login-notification" class="alert"></div>');

                } else {
                    $(this).prepend('<div id="member_login-notification" class="alert"></div>');
                }
                var notification = $("#member_login-notification");

                if ((form_action_type == "" || form_action_type == "default") && action.indexOf("account") >= 0) {
                    notification.html(`Processing Request...`).addClass("alert-warning");
                    setTimeout(function() {
                        fv.defaultSubmit();
                    }, 100);
                } else {
                    notification.html(`Processing Request...`).addClass("alert-warning");
                    if (counterSubmit == 0) {
                        counterSubmit++;
                        $.ajax({
                            url: action,
                            type: method,
                            data: values,
                            dataType: return_data_type,
                            success: function(data) {

                                if (return_data_type == "html") {
                                    var result = 'success';

                                    if (!data != "") {
                                        var result_widget = data['result_widget'];
                                    }

                                } else {


                                    if (!data['result']) {
                                        var result = 'error';
                                    } else {
                                        var result = data['result'];
                                    }
                                    if (!data['result_widget']) {
                                        var result_widget = '';

                                    } else {
                                        var result_widget = data['result_widget'];
                                    }
                                }
                                if (result == "success") {

                                    if (!data['message']) {
                                        var message = `Your information has submitted successfully!`;

                                    } else {
                                        var message = data['message'];
                                    }
                                    if (!data['redirect_url']) {
                                        var redirect_url = '';

                                    } else {
                                        var redirect_url = data['redirect_url'];
                                    }



                                    if (form_action_type == "notification") {

                                        notification.html(message)
                                            .addClass("alert-success")
                                            .removeClass("alert-danger")
                                            .removeClass("alert-warning")
                                            .delay(2000).slideUp();

                                        if (notification.parents('.modal').length && 'member_login' == 'whmcs_billing_address') {
                                            setTimeout(function() {
                                                notification.parents('.modal').modal('hide');
                                            }, 1000);
                                        }

                                    } else if (form_action_type == "widget") {

                                        if (result_widget != '') {

                                            setTimeout(function() {
                                                if (form_action_div != '.newsletter_modal_form_container') {
                                                    $("html, body").animate({
                                                        scrollTop: 0
                                                    }, 600);
                                                }
                                                $(form_action_div).html(decodeHtml(result_widget)).text();

                                            }, 1000);
                                        }

                                    } else if (form_action_type == "redirect") {

                                        if (redirect_url == "") {
                                            redirect_url = decodeURIComponent("");
                                        }

                                        if (redirect_url.substring(0, 1) != "/" && redirect_url.substring(0, 1) != "h") {
                                            redirect_url = "/" + redirect_url;
                                        }
                                        current_location = "/";
                                        refresh_pages_string = "/login";
                                        refresh_pages_string = refresh_pages_string.replace(/ /g, '');
                                        refresh_pages_array = refresh_pages_string.split(',');
                                        notification.html(message)
                                            .addClass("alert-success")
                                            .removeClass("alert-danger")
                                            .removeClass("alert-warning")
                                            .delay(2000).slideUp();
                                        if (action == "/api/widget/json/get/Bootstrap%20Theme%20-%20Member%20Login%20Page" && current_location.indexOf("/login") == -1 && refresh_pages_string != '' && (!refresh_pages_array.includes(current_location) || refresh_pages_string == "/login")) {
                                            window.location.href = window.location.href + '?logged';
                                        } else {
                                            window.location.href = redirect_url;
                                        }

                                        fv.resetForm(true);
                                    }
                                    if (form_action_div != '.newsletter_modal_form_container' && 'member_login' != 'whmcs_billing_address') {
                                        $('.modal-backdrop').hide();
                                    }
                                } else {
                                    if (typeof grecaptcha !== "undefined") {
                                        grecaptcha.reset();
                                    }
                                    if (!data['message']) {
                                        var message = `You entered invalid data. Please try to save again.`;

                                    } else {
                                        var message = data['message'];
                                    }
                                    notification.html(message)
                                        .addClass("alert-danger")
                                        .removeClass("alert-success")
                                        .removeClass("alert-warning")
                                        .fadeIn();
                                    fv.disableSubmitButtons(false);
                                }
                            },
                            error: function(e) {
                                if (typeof grecaptcha !== "undefined") {
                                    grecaptcha.reset();
                                    notification.html(`Recaptcha Error`);
                                } else {
                                    notification.html(`A connection error occurred while saving. Please try to save again.`);
                                }
                                notification.addClass("alert-warning")
                                    .removeClass("alert-success")
                                    .removeClass("alert-warning")
                                    .fadeIn();
                            }
                        }); /// End Ajax
                        counterSubmit = 0;
                    }
                } //END else
            }).bind('keydown', function(event) {

                if (event.ctrlKey || event.metaKey) {

                    switch (String.fromCharCode(event.which).toLowerCase()) {

                        case 's':
                            $(this).submit();
                            break;
                    }
                }
            });

            /// This will turn any select2 that are required in the form builder to being required elements.
            $('#member_login select').each(function(i, obj) {
                setTimeout(function() {
                    console.log($(obj).attr("style") + $(obj).attr("name"));
                    if ($(obj).prop("required") && $(obj).attr("style") == "display: none;") {
                        $(obj).css("z-index", "-999");
                        $(obj).css("height", "0");
                        $(obj).css("width", "0");
                        $(obj).css("display", "block");
                        $(obj).css("position", "absolute");
                    }
                }, 3000);
            });

        }); //END $('# echo $_SERVER[form_element_id]; ').formValidation(
    </script>
    <script>
        function decision(message, url) {

            if (confirm(message)) {
                setTimeout(function() {
                    window.location = url;
                }, 0);
            }
        }
        var ajax = new Array();

        function getCityList(sel) {
            var countryCode = sel;
            var result = '';
            var flag = ''
            document.getElementById('state').options.length = 0; // Empty city select box

            if (countryCode.length > 0) {

                if (countryCode == "CA" || countryCode == "CR") {
                    result = "Province";
                    flag = "<img src='flags/CA.png' style='width:16px;height:11px;'>";

                } else if (countryCode == "UK") {
                    result = "Region";
                    flag = "<img src='/flags/UK.png' style='width:16px;height:11px;'>";

                } else if (countryCode == "US") {
                    result = "Zip Code";
                    flag = "<img src='/flags/US.png' style='width:16px;height:11px;'>";

                } else {
                    result = "&nbsp;";
                    document.getElementById('state').disabled = false;
                    flag = "<img src='/flags/All.png' style='width:16px;height:16px;'>";
                }
                document.getElementById('byregion').innerHTML = result;
                document.getElementById('sflag').innerHTML = flag;

                if (countryCode == "US") {
                    document.getElementById('zipcode').style.visibility = 'visible';
                    document.getElementById('state').style.visibility = 'hidden';
                    document.getElementById('state').style.display = 'none';
                    document.getElementById('zipcode').style.display = 'block';

                } else {
                    document.getElementById('zipcode').style.visibility = 'hidden';
                    document.getElementById('state').style.visibility = 'visible';
                    document.getElementById('state').style.display = 'block';
                    document.getElementById('zipcode').value = '';
                    document.getElementById('zipcode').style.display = 'none';
                }
                var index = ajax.length;
                ajax[index] = new sack();
                ajax[index].requestFile = '/getStateList.php?statetype=code&category=' + countryCode; // Specifying which file to get
                ajax[index].onCompletion = function() {
                    createCities(index)
                }; // Specify function that will be executed after file has been found
                ajax[index].runAJAX(); // Execute AJAX function
            }
        }

        function getCityListSearch(sel) {
            var countryCode = sel;
            var result = '';
            document.getElementById('state').options.length = 0; // Empty city select box

            if (countryCode.length > 0) {

                if (countryCode == "CA" || countryCode == "CR") {
                    document.getElementById('zipsearch').style.visibility = 'collapse';
                    document.getElementById('zipsearch').style.height = '0px';
                    document.getElementById('statesearch').style.visibility = 'visible';
                    document.getElementById('statesearch').style.height = '62px';
                    document.getElementById('zipcode').value = '';
                    result = "Province";
                    flag = "<img src='/flags/CA.png' style='width:16px;height:11px;'>";

                } else if (countryCode == "UK") {
                    document.getElementById('zipsearch').style.visibility = 'collapse';
                    document.getElementById('zipsearch').style.height = '0px';
                    document.getElementById('statesearch').style.visibility = 'visible';
                    document.getElementById('statesearch').style.height = '62px';
                    document.getElementById('zipcode').value = '';
                    result = "Region";
                    flag = "<img src='/flags/UK.png' style='width:16px;height:11px;'>";

                } else if (countryCode == "US") {
                    result = "&nbsp;";
                    document.getElementById('statesearch').style.visibility = 'collapse';
                    document.getElementById('statesearch').style.height = '0px';
                    document.getElementById('zipsearch').style.visibility = 'visible';
                    document.getElementById('zipsearch').style.height = '112px';
                    result = "Zip Code";
                    flag = "<img src='/flags/US.png' style='width:16px;height:11px;'>";

                } else {
                    result = "&nbsp;";
                    document.getElementById('zipsearch').style.visibility = 'collapse';
                    document.getElementById('zipsearch').style.height = '0px';
                    document.getElementById('statesearch').style.visibility = 'collapse';
                    document.getElementById('statesearch').style.height = '0px';
                    document.getElementById('zipcode').value = '';
                    flag = "<img src='/flags/All.png' style='width:16px;height:16px;'>";
                }
                document.getElementById('byregion').innerHTML = result;
                document.getElementById('sflag').innerHTML = flag;
                var index = ajax.length;
                ajax[index] = new sack();
                ajax[index].requestFile = '/getStateList.php?type=account&statetype=code&category=' + countryCode; // Specifying which file to get
                ajax[index].onCompletion = function() {
                    createCities(index)
                }; // Specify function that will be executed after file has been found
                ajax[index].runAJAX(); // Execute AJAX function
            }
        }

        function getCityListAccount(sel) {
            var countryCode = sel;
            var result = '';
            document.getElementById('state').options.length = 0; // Empty city select box

            if (countryCode == "CA") {
                result = "Province";

            } else if (countryCode == "UK") {
                result = "Region";

            } else if (countryCode == "US" || countryCode == "AU") {
                result = "State";

            } else {
                result = "Region";
            }
            if (result != "") {
                $("#state").prev('.control-label').text(result);
            }
            if (countryCode.length > 0) {
                var index = ajax.length;
                ajax[index] = new sack();
                ajax[index].requestFile = '/getStateList.php?type=account&statetype=code&category=' + countryCode; // Specifying which file to get
                ajax[index].onCompletion = function() {
                    createCities(index)
                }; // Specify function that will be executed after file has been found
                ajax[index].runAJAX(); // Execute AJAX function
            }
        }

        function getCityListPayment(sel) {
            var countryCode = sel;
            var result = '';
            document.getElementById('state').options.length = 0; // Empty city select box

            if (countryCode.length > 0) {

                if (countryCode == "CA") {
                    result = "Province";
                    document.getElementById('state').disabled = false;

                } else if (countryCode == "UK") {
                    result = "Region";
                    document.getElementById('state').disabled = false;

                } else if (countryCode == "US" || countryCode == "AU") {
                    result = "State";
                    document.getElementById('state').disabled = false;

                } else {
                    result = "Region";
                }
                document.getElementById('byregion').innerHTML = result;
                var index = ajax.length;
                ajax[index] = new sack();
                ajax[index].requestFile = '/getStateList.php?nota=1&statetype=code&category=' + countryCode; // Specifying which file to get
                ajax[index].onCompletion = function() {
                    createCities(index)
                }; // Specify function that will be executed after file has been found
                ajax[index].runAJAX(); // Execute AJAX function
            }
        }

        function createCities(index) {
            var obj = document.getElementById('state');
            eval(ajax[index].response); // Executing the response from Ajax as Javascript code
        }
    </script>
    <!-- DROPDOWN SELECT SCRIPT -->
    <!-- Select2 Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/select2-bootstrap.min.css')}}">
    <script defer src="{{asset('frontend/js/select2.min.js')}}"></script>
        <!---alertjs file-->
   <script  src="{{ asset('frontend/plug/toaster/toastr.min.js')}}"></script>
    <script  src="{{ asset('frontend/plug/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>
    <!--[if lt IE 9]>
      <script defer src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script defer src="/directory/cdn/bootstrap/select2/master/js/respond.min.js"></script>
      <![endif]-->
    <script>
        $(document).ready(function() {

            function getSecondLevel(div, id) {
                $("#" + div).select2("data", {
                    id: "",
                    text: "Loading..."
                });
                $.ajax({
                    url: '/ajaxsearch/get-services',
                    type: "GET",
                    data: {
                        'specialty_id': id
                    },
                    dataType: "json",
                    success: function(data) {
                        var options = '';

                        for (var i = 0; i < data.length; i++) {
                            options += '<option value="' + data[i].value + '">' + data[i].title + '</option>';
                        }
                        if (div == "tid") {
                            $("#ttid").select2("data", {
                                id: "",
                                text: "No Options Available"
                            });
                            $("#ttid").select2("enable", false);
                        }
                        if (data.length > 1) {
                            $("#" + div).select2("enable", true);
                            $("#" + div).html(options);
                            $("#" + div).select2("val", "");

                        } else {
                            $("#" + div).select2("data", {
                                id: "",
                                text: "No Options Available"
                            });
                            $("#" + div).select2("val", "");
                        }
                    }
                });
            }

            function getSecondLevelAccount(div, id) {
                $("#" + div).select2("data", {
                    id: "",
                    text: "Loading..."
                });
                $.ajax({
                    url: '/ajaxsearch/get-services',
                    type: "GET",
                    data: {
                        'specialty_id': id
                    },
                    dataType: "json",
                    success: function(data) {
                        var options = '';

                        for (var i = 0; i < data.length; i++) {
                            options += '<option value="' + data[i].value + '">' + data[i].title + '</option>';
                        }
                        if (data.length > 1) {
                            $("#" + div).select2("close");
                            $("#" + div).select2("val", "");
                            $("#" + div).select2("enable", true);
                            $("#" + div).html(options);


                        } else {
                            $("#" + div).select2("data", {
                                id: "",
                                text: "No Options Available"
                            });
                            $("#" + div).select2("val", "");
                        }
                    }
                });
            }

            function getThirdLevel(div, id, id2) {
                $("#" + div).select2("data", {
                    id: "",
                    text: "Loading..."
                });

                $.ajax({
                    url: '/ajaxsearch/get-locations',
                    type: "GET",
                    data: {
                        'specialty_id': id,
                        'treatment_id': id2,
                    },
                    dataType: "json",
                    success: function(data) {
                        var options = '';

                        for (var i = 0; i < data.length; i++) {
                            options += '<option value="' + data[i].value + '">' + data[i].title + '</option>';
                        }
                        if (data.length > 1) {
                            $("#" + div).select2("enable", true);
                            $("#" + div).html(options);
                            $("#" + div).select2("val", "");

                        } else {
                            $("#" + div).select2("data", {
                                id: "",
                                text: "No Options Available"
                            });
                            $("#" + div).select2("val", "");
                        }
                    }
                });
            }

            function getStateList(div, id) {
                $("#" + div).select2("data", {
                    id: "",
                    text: "Loading..."
                });
                $.ajax({
                    url: '/ajaxsearch/get-states',
                    type: "GET",
                    data: {
                        'country': id
                    },
                    dataType: "json",
                    success: function(data) {
                        var options = '';

                        for (var i = 0; i < data.length; i++) {
                            options += '<option value="' + data[i].value + '">' + data[i].title + '</option>';
                        }
                        ///if(id=="IN")  options += '<option value="TS">Telangana</option>';
                        /// Disabled by BD on 8/13/2020 now the master table has this province
                        if (data.length > 1) {
                            $("#" + div).select2("enable", true);
                            $("#" + div).html(options);
                            $("#" + div).select2("val", "");
                            $("#" + div).select2("open");
                        }
                    }
                });
            }

            function getInfinityChained(div, id) {
                $("#" + div).select2("data", {
                    id: "",
                    text: "Loading..."
                });
                $.ajax({
                    url: '/ajaxsearch/get-subcategory',
                    type: "GET",
                    data: {
                        'parent': id
                    },
                    dataType: "json",
                    success: function(data) {
                        var options = '';

                        for (var i = 0; i < data.length; i++) {
                            options += '<option value="' + data[i].value + '">' + data[i].title + '</option>';
                        }
                        if (data.length > 1) {
                            $("#" + div).select2("enable", true);
                            $("#" + div).html(options);
                            $("#" + div).select2("val", "");

                        } else {
                            $("#" + div).select2("data", {
                                id: "",
                                text: "No Options Available"
                            });
                        }
                    }
                });
            }

            function categoryChained(div, id) {
                $("#" + div).select2("data", {
                    id: "",
                    text: "Loading..."
                });
                if (div == "tid") {
                    url_link = '/ajaxsearch/get-services'
                    data_passed = {
                        'specialty_id': id
                    }
                } else {
                    url_link = '/ajaxsearch/category-list';
                    data_passed = {
                        'parent': id
                    };
                }
                $.ajax({
                    url: url_link,
                    type: "GET",
                    data: data_passed,
                    dataType: "json",
                    success: function(data) {
                        var options = '';

                        for (var i = 0; i < data.length; i++) {
                            options += '<option value="' + data[i].value + '">' + data[i].title + '</option>';
                        }

                        if (data.length > 1) {
                            $("#" + div).select2("enable", true);
                            $("#" + div).html(options);
                            $("#" + div).select2("val", "");

                        } else {
                            $("#" + div).select2("data", {
                                id: "",
                                text: "No Options Available"
                            });
                        }
                    }
                });
            }
            $("#bd-chained").select2({
                title: "Select An Option",
                placeholder: "Select An Option",
                allowClear: true,
                formatNoMatches: function() {
                    return "No matches found";
                }
            }).change(function() {
                var id = $(this).val();
                $("#tid").select2("enable", false);
                getInfinityChained("tid", id);
            });
            $("#category-chained").select2({
                title: "Select An Option",
                placeholder: "Select An Option",
                allowClear: true
            }).change(function() {
                var id = $(this).val();
                $("#subcategory-chained").select2("enable", false);
                categoryChained("subcategory-chained", id);
            });
            $(".infinite-chained").select2({
                title: "Select option from list",
                placeholder: "Click to select an option",
                allowClear: true,
                formatNoMatches: function() {
                    return "No matches found";
                }
            }).change(function() {
                var id = $(this).val();
                var attr = $(this).attr('next');

                if (typeof attr !== 'undefined' && attr !== false) {
                    $("#" + attr).select2("enable", false);
                    categoryChained(attr, id);
                }
            });
            $("#subcategory-chained").select2();
            $(".combobox").select2();
            $(".search-chained").select2();
            $("#country-chained").select2({
                title: "",
                placeholder: "",
                val: "",
                allowClear: true,
                formatNoMatches: function() {
                    return "No matches found";
                }
            }).change(function() {
                var id = $(this).val();
                $("#state-chained").select2("enable", false);
                getStateList("state-chained", id);
                var state = "";

                if (id == "CA") {
                    state = "Province";

                } else if (id == "UK") {
                    state = "Region";

                } else if (id == "US" || id == "AU") {
                    state = "State";

                } else {
                    state = "Region";
                }
                $("#state-chained").prev(".control-label").text(state);
            });
            $("#state-chained").select2();
            $("#country-chained-2").select2({
                title: "Select Country",
                placeholder: "(select country)",
                val: "",
                allowClear: true,
                formatNoMatches: function() {
                    return "No matches found";
                }
            }).change(function() {
                var id = $(this).val();
                $("#state-chained-2").select2("enable", false);
                getStateList("state-chained-2", id);
                var state = "";

                if (id == "CA") {
                    state = "Province";

                } else if (id == "UK") {
                    state = "Region";

                } else if (id == "US" || id == "AU") {
                    state = "State";

                } else {
                    state = "Region";
                }
                $("#state-chained-2").prev(".control-label").text(state);
            });
            $("#state-chained-2").select2();
            $("#profession_id").select2({
                placeholder: "Select From List",
                allowClear: true,
                formatNoMatches: function() {
                    return "No matches found";
                }
            }).change(function() {
                var id = $(this).val();
                getSecondLevelAccount("category_id", id);
            });
            $("#sid").select2({
                title: "Select An Option",
                placeholder: "Select An Option",
                allowClear: true,
                formatNoMatches: function() {
                    return "No matches found";
                }
            }).change(function() {
                var id = $(this).val();
                $("#tid").select2("enable", false);
                getSecondLevel("tid", id);
                $("#tid").select2("open");
            });
            $("#location_value_dropdown").select2({
                title: "(optional)",
                placeholder: "(optional)",
                allowClear: true,
                formatNoMatches: function() {
                    return "No matches found";
                }
            });
            $("#tid").select2({
                title: "Select An Option",
                placeholder: "Select An Option",
                allowClear: true,
                formatNoMatches: function() {
                    return "No matches found";
                }
            });
            $("#location_value_dropdown").select2({
                title: "(optional)",
                placeholder: "(optional)",
                allowClear: true
            });
        });
    </script>
    <script>
        /**This function is for price and sqr foot only accepts numbers**/
        (function(factory) {
            if (typeof define === "function" && define.amd) {
                define(["jquery"], factory);
            } else {
                factory(window.jQuery);
            }
        })(function($) {
            $.fn.numeric = function(config, callback) {
                if (typeof config === "boolean") {
                    config = {
                        decimal: config,
                        negative: true,
                        decimalPlaces: -1
                    };
                }
                config = config || {};
                if (typeof config.negative == "undefined") {
                    config.negative = true;
                }
                var decimal = config.decimal === false ? "" : config.decimal || ".";
                var negative = config.negative === true ? true : false;
                var decimalPlaces = typeof config.decimalPlaces == "undefined" ? -1 : config.decimalPlaces;
                callback = typeof callback == "function" ? callback : function() {};
                return this.data("numeric.decimal", decimal)
                    .data("numeric.negative", negative)
                    .data("numeric.callback", callback)
                    .data("numeric.decimalPlaces", decimalPlaces)
                    .keypress($.fn.numeric.keypress)
                    .keyup($.fn.numeric.keyup)
                    .blur($.fn.numeric.blur);
            };
            $.fn.numeric.keypress = function(e) {
                var decimal = $.data(this, "numeric.decimal");
                var negative = $.data(this, "numeric.negative");
                var decimalPlaces = $.data(this, "numeric.decimalPlaces");
                var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
                if (key == 13 && this.nodeName.toLowerCase() == "input") {
                    return true;
                } else if (key == 13) {
                    return false;
                }
                var allow = false;
                if ((e.ctrlKey && key == 97) || (e.ctrlKey && key == 65)) {
                    return true;
                }
                if ((e.ctrlKey && key == 120) || (e.ctrlKey && key == 88)) {
                    return true;
                }
                if ((e.ctrlKey && key == 99) || (e.ctrlKey && key == 67)) {
                    return true;
                }
                if ((e.ctrlKey && key == 122) || (e.ctrlKey && key == 90)) {
                    return true;
                }
                if ((e.ctrlKey && key == 118) || (e.ctrlKey && key == 86) || (e.shiftKey && key == 45)) {
                    return true;
                }
                if (key < 48 || key > 57) {
                    var value = $(this).val();
                    if ($.inArray("-", value.split("")) !== 0 && negative && key == 45 && (value.length === 0 || parseInt($.fn.getSelectionStart(this), 10) === 0)) {
                        return true;
                    }
                    if (decimal && key == decimal.charCodeAt(0) && $.inArray(decimal, value.split("")) != -1) {
                        allow = false;
                    }
                    if (key != 8 && key != 9 && key != 13 && key != 35 && key != 36 && key != 37 && key != 39 && key != 46) {
                        allow = false;
                    } else {
                        if (typeof e.charCode != "undefined") {
                            if (e.keyCode == e.which && e.which !== 0) {
                                allow = true;
                                if (e.which == 46) {
                                    allow = false;
                                }
                            } else if (e.keyCode !== 0 && e.charCode === 0 && e.which === 0) {
                                allow = true;
                            }
                        }
                    }
                    if (decimal && key == decimal.charCodeAt(0)) {
                        if ($.inArray(decimal, value.split("")) == -1) {
                            allow = true;
                        } else {
                            allow = false;
                        }
                    }
                } else {
                    allow = true;
                    if (decimal && decimalPlaces > 0) {
                        var dot = $.inArray(decimal, $(this).val().split(""));
                        if (dot >= 0 && $(this).val().length > dot + decimalPlaces) {
                            allow = false;
                        }
                    }
                }
                return allow;
            };
            $.fn.numeric.keyup = function(e) {
                var val = $(this).val();
                if (val && val.length > 0) {
                    var carat = $.fn.getSelectionStart(this);
                    var selectionEnd = $.fn.getSelectionEnd(this);
                    var decimal = $.data(this, "numeric.decimal");
                    var negative = $.data(this, "numeric.negative");
                    var decimalPlaces = $.data(this, "numeric.decimalPlaces");
                    if (decimal !== "" && decimal !== null) {
                        var dot = $.inArray(decimal, val.split(""));
                        if (dot === 0) {
                            this.value = "0" + val;
                            carat++;
                            selectionEnd++;
                        }
                        if (dot == 1 && val.charAt(0) == "-") {
                            this.value = "-0" + val.substring(1);
                            carat++;
                            selectionEnd++;
                        }
                        val = this.value;
                    }
                    var validChars = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "-", decimal];
                    var length = val.length;
                    for (var i = length - 1; i >= 0; i--) {
                        var ch = val.charAt(i);
                        if (i !== 0 && ch == "-") {
                            val = val.substring(0, i) + val.substring(i + 1);
                        } else if (i === 0 && !negative && ch == "-") {
                            val = val.substring(1);
                        }
                        var validChar = false;
                        for (var j = 0; j < validChars.length; j++) {
                            if (ch == validChars[j]) {
                                validChar = true;
                                break;
                            }
                        }
                        if (!validChar || ch == " ") {
                            val = val.substring(0, i) + val.substring(i + 1);
                        }
                    }
                    var firstDecimal = $.inArray(decimal, val.split(""));
                    if (firstDecimal > 0) {
                        for (var k = length - 1; k > firstDecimal; k--) {
                            var chch = val.charAt(k);
                            if (chch == decimal) {
                                val = val.substring(0, k) + val.substring(k + 1);
                            }
                        }
                    }
                    if (decimal && decimalPlaces > 0) {
                        var dot = $.inArray(decimal, val.split(""));
                        if (dot >= 0) {
                            val = val.substring(0, dot + decimalPlaces + 1);
                            selectionEnd = Math.min(val.length, selectionEnd);
                        }
                    }
                    this.value = val;
                    $.fn.setSelection(this, [carat, selectionEnd]);
                }
            };
            $.fn.numeric.blur = function() {
                var decimal = $.data(this, "numeric.decimal");
                var callback = $.data(this, "numeric.callback");
                var negative = $.data(this, "numeric.negative");
                var val = this.value;
                if (val !== "") {
                    var re = new RegExp("^" + (negative ? "-?" : "") + "d+$|^" + (negative ? "-?" : "") + "d*" + decimal + "d+$");
                    if (!re.exec(val)) {
                        callback.apply(this);
                    }
                }
            };
            $.fn.removeNumeric = function() {
                return this.data("numeric.decimal", null)
                    .data("numeric.negative", null)
                    .data("numeric.callback", null)
                    .data("numeric.decimalPlaces", null)
                    .unbind("keypress", $.fn.numeric.keypress)
                    .unbind("keyup", $.fn.numeric.keyup)
                    .unbind("blur", $.fn.numeric.blur);
            };
            $.fn.getSelectionStart = function(o) {
                if (o.type === "number") {
                    return undefined;
                } else if (o.createTextRange && document.selection) {
                    var r = document.selection.createRange().duplicate();
                    r.moveEnd("character", o.value.length);
                    if (r.text == "") return o.value.length;
                    return Math.max(0, o.value.lastIndexOf(r.text));
                } else {
                    try {
                        return o.selectionStart;
                    } catch (e) {
                        return 0;
                    }
                }
            };
            $.fn.getSelectionEnd = function(o) {
                if (o.type === "number") {
                    return undefined;
                } else if (o.createTextRange && document.selection) {
                    var r = document.selection.createRange().duplicate();
                    r.moveStart("character", -o.value.length);
                    return r.text.length;
                } else return o.selectionEnd;
            };
            $.fn.setSelection = function(o, p) {
                if (typeof p == "number") {
                    p = [p, p];
                }
                if (p && p.constructor == Array && p.length == 2) {
                    if (o.type === "number") {
                        o.focus();
                    } else if (o.createTextRange) {
                        var r = o.createTextRange();
                        r.collapse(true);
                        r.moveStart("character", p[0]);
                        r.moveEnd("character", p[1] - p[0]);
                        r.select();
                    } else {
                        o.focus();
                        try {
                            if (o.setSelectionRange) {
                                o.setSelectionRange(p[0], p[1]);
                            }
                        } catch (e) {}
                    }
                }
            };
        });
        $("input.justNumbers").numeric();
    </script>


    <script defer src="{{asset('frontend/js/websiteScripts.js')}}"></script>
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