      <div class="header">
         <div class="container">
            <div class="row vmargin">
               <div id="website_logo" class="col-md-5 tpad sm-text-center">
                  <a href="index.html" title="AIOUG">
                  <img  src="assets/images/Website_Logo.jpg" alt="AIOUG">
                  </a>
               </div>
               <style type='text/css'> .goog-te-gadget-simple {
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
                  color: #555;
                  }
                  .header_category .btn-group button
                  {       padding: 5px 30px;
                  border: 1px solid #ccc;
                  font-size: 14px;width: 168px !important;
                  height: 30px !important;}
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
                  body input.tt-hint,body input.member_search.form-control.normal-autosuggest-input.tt-query {
                  background-color: white !important;
                  }
                  .input-group-sm .input-group-addon .fa {
                  font-size: 15px;
                  } 
               </style>
               <div class="col-md-7 text-right sm-text-center header-right-container">
                  <ul class="mini-nav nomargin list-inline vpad">
                     <li class='bmargin'><span id='link207'  class='bmargin'> </span></li>
                     <li class='bmargin'><a href='/login' id='link208'  class='rpad bmargin'>Member Login</a></li>
                     <li class='bmargin norpad'><a href='/join' id='link210'  class='btn btn_get_listed bold'>AIOUGs - Join Today <i class="fa fa-chevron-right lmargin align-middle hidden-xs"></i></a></li>
                  </ul>
                  <div class="clearfix"></div>
                  <form action="/events" name="frm1" class="form-inline website-search">
                     <div class="input-group input-group-sm bmargin sm-autosuggest">
                        <span class="input-group-addon hidden-md"><i class="fa fa-search"></i></span>
                        <input type="text"
                           placeholder="Name or Keyword" value="" name="q"
                           class=" member_search form-control input-sm" autocomplete="off">
                     </div>
                     <div class="input-group input-group-sm bmargin">
                        <div class="categoryEvents header_category">
                           <div class="styled-select2">
                              <select class="eventPicker" multiple data-selected-text-format="count>1" name="chapter[]" title="Select Chapter" >
                                 <option value="6" >Chennai</option>
                                 <option value="7" >Bengaluru</option>
                                 <option value="8" >Hyderabad</option>
                                 <option value="9" >Pune</option>
                                 <option value="10" >Mumbai</option>
                                 <option value="11" >North India</option>
                                 <option value="12" >Gujarat</option>
                                 <option value="13" >Vizag</option>
                                 <option value="14" >Kolkata</option>
                                 <option value="15" >Kerala</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <input type="submit" value="Search" class="btn btn-sm btn_search bmargin xs-btn-block bold">
                  </form>
               </div>
            </div>
         </div>
         <style>
            .go_live{display:none}
         </style>
         <style type='text/css'> .mobile-main-menu .hasChildren span a {
            padding: 0px;
            }
            .user_sidebar > img {
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
            .main_menu, .user_sidebar {
            padding: 5px 8px;
            margin-right:0;
            }
            .main_menu i, .user_sidebar i {
            font-size: 16px;
            }
            .navbar-nav li {
            float: none!Important;
            }
            .navbar-default{
            -webkit-transition: all .6s ease-in-out;
            -moz-transition: all .6s ease-in-out;
            -o-transition: all .6s ease-in-out;
            transition: all .6s ease-in-out;
            }
            .transparent_menu {
            background-color: rgba(208, 29, 21,0.95)!important;
            }
            @media only screen and (max-width: 991px) {
            #popover {display: none}
            }
            @media only screen and (max-width: 1100px){
            .mobile-main-menu{display:block!important}
            .navbar-toggle {display: block}
            #bs-main_menu .nav {display: none!important}
            }
            .mobile-main-menu {
            position: fixed;
            height: calc(100% - 50px)!important;
            width: 250px;
            background: rgb(208, 29, 21);
            z-index: 99999;
            right: -250px;
            top: 50px;
            display: none;
            -webkit-transition: all .6s ease-in-out;
            -moz-transition: all .6s ease-in-out;
            -o-transition: all .6s ease-in-out;
            transition: all .6s ease-in-out;
            overflow-y: auto!important;
            overflow-x: hidden!important;
            }
            .mobile-main-menu ul li i {
            color: rgb(253, 253, 253);
            cursor: pointer;
            float: right;
            padding: 13px;
            }
            .mobile-main-menu.opened{
            right: 0px!important;
            }
            .mobile-main-menu ul li a, .mobile-main-menu ul li span {
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
            .mobile-main-menu .sidebar-nav li.sub_open > ul{
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
            .mobile-main-menu .sidebar-nav > li {
            display: block;
            line-height: 20px;
            padding: 0 15px 0 20px;
            }
            .mobile-main-menu .sidebar-nav li a, .mobile-main-menu .sidebar-nav li span {
            text-decoration: none;
            color: rgb(253, 253, 253);
            }
            .mobile-main-menu .sidebar-nav li a i, .mobile-main-menu .sidebar-nav li span i {
            display: none;
            } 
         </style>
         <div class="mobile-main-menu">
            <ul class="sidebar-nav">
               <li class=''><a href='index.html' id='link1'>Home</a></li>
               <li class=''>
                  <span id='link232'> About Us</span>
                  <ul>
                     <li class=''><a href='about.html' id='link233'>About AIOUG</a></li>
                     <li class=''><a href='team.html' id='link246'>Meet the Team</a></li>
                     <li class=''><a href='volunteer.html' id='link314'>Volunteer with us</a></li>
                  </ul>
               </li>
               <li class=''>
                  <a href='#' id='link236'>Events</a>
                  <ul>
                     <li class=''><a href='eventcalendar.html' id='link313'>Events Calender</a></li>
                     <li class=''><a href='events.html' id='link338'>In Person Events</a></li>
                     <li class=''><a href='webinars.html' id='link312'>Webinars</a></li>
                     <li class=''><a href='ogyatra.html' id='link331'>OGYatra</a></li>
                     <li class=''><a href='/sangam.html' id='link330'>Sangam</a></li>
                  </ul>
               </li>
               <li class=''>
                  <a href='#' id='link227'>Chapters</a>
                  <ul>
                     <li class=''><a href='chapter.html' id='link238'>Chennai</a></li>
                     <li class=''><a href='chapter.html' id='link239'>Bengaluru</a></li>
                     <li class=''><a href='chapter.html' id='link240'>Hyderabad</a></li>
                     <li class=''><a href='chapter.html' id='link242'>Pune</a></li>
                     <li class=''><a href='chapter.htmli' id='link243'>Mumbai</a></li>
                     <li class=''><a href='chapter.html' id='link245'>North India</a></li>
                     <li class=''><a href='chapter.html' id='link244'>Gujarat</a></li>
                     <li class=''><a href='chapter.html' id='link241'>Vizag</a></li>
                     <li class=''><a href='chapter.html' id='link307'>Kolkata</a></li>
                     <li class=''><a href='chapter.html' id='link306'>Kerala</a></li>
                  </ul>
               </li>
               <li class=''>
                  <a href='#' id='link367'>SIG</a>
                  <ul>
                     <li class=''><a href='chapter.html' id='link368'>Analytics</a></li>
                     <li class=''><a href='chapter.html' id='link369'>Security</a></li>
                  </ul>
               </li>
               <li class='head_join'><a href='join.html' id='link231'>Join Us</a></li>
               <li class=''><a href='contact.html' id='link235'>Contact Us</a></li>
               <li class=''>
                  <a href='#' id='link319'>Member Zone</a>
                  <ul>
                     <li class=''><a href='/library' id='link321'>Library</a></li>
                     <li class=''><a href='#' id='link359'  class='subs_events'>Subscribed Events</a></li>
                     <li class=''><a href='videos.html' id='link352'>Webinar Recordings</a></li>
                     <li class=''><a href='interview_videos.html' id='link322'>Interviews</a></li>
                     <li class=''><a href='/magazines' id='link365'>Magazine</a></li>
                     <li class='go_live'><a href='/live' id='link366'>Go Live</a></li>
                  </ul>
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
                     <li class=''><a href='index.html' id='link1'>Home</a></li>
                     <li class=''>
                        <span id='link232'> About Us</span>
                        <ul>
                           <li class=''><a href='/aioug' id='link233'>About AIOUG</a></li>
                           <li class=''><a href='/team' id='link246'>Meet the Team</a></li>
                           <li class=''><a href='/volunteer' id='link314'>Volunteer with us</a></li>
                        </ul>
                     </li>
                     <li class=''>
                        <a href='#' id='link236'>Events</a>
                        <ul>
                           <li class=''><a href='/eventcalendar' id='link313'>Events Calender</a></li>
                           <li class=''><a href='/events?category[]=In Person Events&menu=1' id='link338'>In Person Events</a></li>
                           <li class=''><a href='/events?category[]=Webinars&menu=1&type=1' id='link312'>Webinars</a></li>
                           <li class=''><a href='/ogyatra' id='link331'>OGYatra</a></li>
                           <li class=''><a href='/sangam20' id='link330'>Sangam</a></li>
                        </ul>
                     </li>
                     <li class=''>
                        <a href='#' id='link227'>Chapters</a>
                        <ul>
                           <li class=''><a href='/chapter/chennai' id='link238'>Chennai</a></li>
                           <li class=''><a href='/chapter/bengaluru' id='link239'>Bengaluru</a></li>
                           <li class=''><a href='/chapter/hyderabad' id='link240'>Hyderabad</a></li>
                           <li class=''><a href='/chapter/pune' id='link242'>Pune</a></li>
                           <li class=''><a href='/chapter/mumbai' id='link243'>Mumbai</a></li>
                           <li class=''><a href='/chapter/north-india' id='link245'>North India</a></li>
                           <li class=''><a href='/chapter/gujarat' id='link244'>Gujarat</a></li>
                           <li class=''><a href='/chapter/vizag' id='link241'>Vizag</a></li>
                           <li class=''><a href='/chapter/kolkata' id='link307'>Kolkata</a></li>
                           <li class=''><a href='/chapter/kerala' id='link306'>Kerala</a></li>
                        </ul>
                     </li>
                     <li class=''>
                        <a href='#' id='link367'>SIG</a>
                        <ul>
                           <li class=''><a href='/sig/analytics' id='link368'>Analytics</a></li>
                           <li class=''><a href='/sig/security' id='link369'>Security</a></li>
                        </ul>
                     </li>
                     <li class='head_join'><a href='/join' id='link231'>Join Us</a></li>
                     <li class=''><a href='/about/contact' id='link235'>Contact Us</a></li>
                     <li class=''>
                        <a href='#' id='link319'>Member Zone</a>
                        <ul>
                           <li class=''><a href='/library' id='link321'>Library</a></li>
                           <li class=''><a href='#' id='link359'  class='subs_events'>Subscribed Events</a></li>
                           <li class=''><a href='/videos?type=1&category[]=Webinar recording' id='link352'>Webinar Recordings</a></li>
                           <li class=''><a href='/interview_videos' id='link322'>Interviews</a></li>
                           <li class=''><a href='/magazines' id='link365'>Magazine</a></li>
                           <li class='go_live'><a href='/live' id='link366'>Go Live</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <!--CSS IF MENU IS FIXED TOP-->
      </div>