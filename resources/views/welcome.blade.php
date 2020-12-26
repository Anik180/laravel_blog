@php
$catapp=DB::table('posts')->where('is_approved',1)->first();
@endphp
@extends('layouts.frontend.app')
@section('title','Blog') 
@push('css')
@endpush 
@section('content')
<div class="container clearfix text-center above-content-banner-ad"></div>
<div class="clearfix"></div>
<!-- Begin  Content -->
<div id="first_container" class="content-container fr-view">
   <style type='text/css'> #first_container {
      background-color: rgb(251, 251, 251);
      }
      body{
      z-index: 0;
      }
      .vegas-slide-inner {/*background-position:center top!important;*/ background-size: contain !important}
      .previous {
      left: 10px;
      right: auto;
      background-image: url('//vegas.jaysalvat.com/img/icon-previous.svg') !important;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      }
      .vegas-wrapper .previous, .vegas-wrapper .next {
      opacity: .8;
      visibility: hidden;
      display: block;
      position: absolute;
      width: 32px;
      height: 32px;
      margin: 0;
      padding: 0;
      background: center center no-repeat;
      background-size: cover;
      top: 50%;
      }
      .vegas-wrapper .next {
      left: auto;
      right: 10px;
      background-image: url('//vegas.jaysalvat.com/img/icon-next.svg') !important;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      }
      .vegas-transition-zoomIn2-out,
      .vegas-transition-zoomOut,
      .vegas-transition-zoomOut2{
      webkit-transform: scale(1) !important;
      transform: scale(1) !important;
      opacity: 0;
      }
      body #first_container{
      overflow:visible !important
      }
   </style>
   <link rel="stylesheet" href="{{asset('frontend/css/vegas.min.css')}}">
   <script defer src="{{asset('frontend/js/vegas.min.js')}}"></script>
   <script defer>
      $(function () {
         "use strict";
         $('#first_container').vegas({
            color: 'rgb(251, 251, 251)',
            delay: 6000,
            transitionDuration: 3000,
            timer: false,
            transition: null,
            slides: [         
                              @foreach($slider as $row)
      
                              {src: '{{asset($row->slider)}}'},
                              @endforeach
                        ],
            init: function () {
               setTimeout(function () {
               $('#first_container').vegas('options', 'transition', 'fade');
               }, 1000);
            }  
         });
      
         $('a.previous').on('click', function () {
            $('#first_container').vegas('options', 'transition', 'fade').vegas('previous');
            return false;
         });
      
         $('a.next').on('click', function () {
            $('#first_container').vegas('options', 'transition', 'fade').vegas('next');
            return false;
         });
      });
   </script>
   <a href="#" class="previous hidden-xs" style="visibility: visible;"></a>
   <a href="#" class="next hidden-xs" style="visibility: visible;"></a>
   <div class="container">
      <div class="clearfix body-content"></div>
      <style type='text/css'>    .body-content {margin:0px;}
         #first_container {
         background-position: center top;
         background-repeat: no-repeat;
         position: relative;
         background-size: cover;
         }
         .homepage_title,.homepage_settings h2,.search_box {
         float:
         left!important;
         }
         .homepage_title,.homepage_settings h2 {
         text-align: left;
         }
         @media only screen and (max-width: 768px) {
         #first_container {
         background-position: left top;
         }
         .homepage_title,.homepage_settings h2,.search_box {
         float:none!important;
         }
         } 
      </style>
      <div class="row-fluid homepage_settings">
         <div class="clearfix"></div>
         <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
   </div>
</div>
<!-- closes container + content-container -->
<div class="homepage-sections fr-view">
   <div class="homepage-section-1">
      <style type='text/css'> #hero-divider h3 {
         font-weight: 800 !important;
         color:#000 !important;
         font-size:30px !important;
         }
         #hero-divider p {
         font-weight: 600 !important;
         color: #4a4747 !important;
         font-size: 20px !important;
         line-height: 1.3 !important;
         }
         #hero-divider a {
         color: #fff !important;
         background: #ff0000 !important;
         border: 0 !important;
         padding: 10px 40px !important;
         font-weight: bold;
         margin-top: 10px !important;
         }
         #hero-divider p span {
         color: #000;
         font-weight: 700;
         } 
      </style>
      <div id="hero-divider" class="content-container homepage_steps">
         {{--          
         <div class="container">
            <div class="col-sm-12 col-md-4 text-center sm-bmargin">
               <h3 class="bold sm-nomargin">
                  <img class="center-block tmargin img-rounded" title="" src="{{asset($config->logo)}}">
               </h3>
               <div class="clearfix"></div>
            </div>
            <div class="clearfix hidden-lg hidden-md"></div>
            <div class="col-sm-12 col-md-8 text-center sm-bmargin sm-tmargin">
               <p class="sm-bmargin">
                  {!!$config->about!!}          
               </p>
               <div class="clearfix"></div>
               <a class="btn btn-success xs-center-block rmargin" href="/sangam20" style="background: #3b8f44 !important;">
               Join Us
               </a>  
               <div class="clearfix"></div>
            </div>
         </div>
         --}}
      </div>
   </div>
   {{-- @php
   $category=DB::table('categories')->where('slug',$id)->first();
   $category->load('posts');
   @endphp --}}
   @php
   $first=DB::table('categories')->first();
   $firstpost=DB::table('posts')->where('category_id',$first->id)->limit(8)->get();
   @endphp
   <div class="homepage-section-2">
   </div>
   <div class="content-container custom-homepage-content homepage-section-3">
      <div class="container">
         <p>    
         <div class="clearfix"></div>
         <div class="content-container">
            <div class="clearfix clearfix-lg"></div>
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <a href="{{route('category.post',$first->slug)}}" class="pull-right hidden-xs btn btn-default"> View All</a>                    
                     <h2 class="nomargin sm-text-center bold" style="color: rgb(41, 41, 41)">                    
                        {{$first->name}}                                           
                     </h2>
                     <hr>
                  </div>
                  {{--  @php
                  $singlepost=DB::table('posts')->where('slug',$slug)->first();
                  @endphp --}}
                  @foreach($firstpost as $row)
                  {{--      @if( $row->status==0)
                  @else --}}
                  @if ($row->status==0)
                  @elseif ($row->is_approved==0)
                  @else
                  <div class="col-sm-6 col-md-3 text-center bmargin">
                     <div class="pic" {{-- style="background-image:url('{{ url('storage/post/'.$row->image) }})" --}} ><img src="{{ url('storage/post/'.$row->image) }}">
                     <span class="pic-caption bottom-to-top">
                        <h3 class="pic-title">
                        {{ \Illuminate\Support\Str::limit($row->title, 40, '...') }}</p>
                        <a href="{{ route('single.post',$row->slug)}}" class="btn btn-success fpad-lg vpad view-more">Read More</a>                            
                     </span>
                  </div>
               </div>
               @endif
               @endforeach
               <div class="clearfix"></div>
               <div class="col-md-6">
                  <a href="events" class="btn btn-lg btn-danger btn-block visible-xs-block">View All</a>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      </p>
      <p> 
         @php
         $second=DB::table('categories')->skip(1)->first();
         $secondpost=DB::table('posts')->where('category_id',$second->id)->limit(8)->get();
         @endphp   
      <div class="clearfix"></div>
      <div class="content-container">
         <div class="clearfix clearfix-lg"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <a href="{{route('category.post',$second->slug)}}" class="pull-right hidden-xs btn btn-default">                        View All                    </a>                    
                  <h2 class="nomargin sm-text-center bold" style="color: rgb(41, 41, 41)">                        
                     {{$second->name}}                                           
                  </h2>
                  <hr>
               </div>
               @foreach($secondpost as $row)
               @if ($row->status==0)
               @elseif ($row->is_approved==0)
               @else
               <div class="col-sm-6 col-md-3 text-center bmargin">
                  <div class="pic" {{-- style="background-image:(' {{ url('storage/post/'.$row->image) }} ')" --}}><img src="{{ url('storage/post/'.$row->image) }}">
                  <span class="pic-caption bottom-to-top">
                     <h3 class="pic-title">{{ \Illuminate\Support\Str::limit($row->title, 40, '...') }}</h3>
                     <a href="{{ route('single.post',$row->slug)}}" class="btn btn-success fpad-lg vpad view-more">                                    Read More                                </a>                            
                  </span>
               </div>
            </div>
            @endif
            @endforeach
            <div class="clearfix"></div>
            <div class="col-md-6">                    
               <a href="" class="btn btn-lg btn-danger btn-block visible-xs-block">View All</a>                
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   </p>
   <p>
      @php
      $third=DB::table('categories')->skip(2)->first();
      $thirdpost=DB::table('posts')->where('category_id',$third->id)->limit(8)->get();
      @endphp           
   <div class="clearfix"></div>
   <div class="content-container">
      <div class="clearfix clearfix-lg"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <a href="{{route('category.post',$third->slug)}}" class="pull-right hidden-xs btn btn-default">                  View All             
               </a>                    
               <h2 class="nomargin sm-text-center bold" >                  
                  {{$third->name}}                                            
               </h2>
               <hr>
            </div>
            @foreach($thirdpost as $row)
            @if ($row->status==0)
            @elseif ($row->is_approved==0)
            @else
            <div class="col-sm-6 col-md-3 text-center bmargin">
               <div class="pic">
                  <img src="{{ url('storage/post/'.$row->image) }}">
                  <span class="pic-caption bottom-to-top">
                     <h3 class="pic-title">                                    
                        {{ \Illuminate\Support\Str::limit($row->title, 40, '...') }}                                
                     </h3>
                     <a href="{{ route('single.post',$row->slug)}}" class="btn btn-success fpad-lg vpad view-more">                           
                     <i class="fa fa-search"></i> Read More                      
                     </a>                            
                  </span>
               </div>
            </div>
            @endif
            @endforeach
            @php
            $fourth=DB::table('categories')->skip(3)->first();
            $fourthpost=DB::table('posts')->where('category_id',$fourth->id)->limit(8)->get();
            @endphp 
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   </p>
   <p>    
   <div class="clearfix"></div>
   <div class="content-container">
      <div class="clearfix clearfix-lg"></div>
      <div class="">
         <div class="row">
            <div class="col-md-12">
               <a href="{{route('category.post',$fourth->slug)}}" class="pull-right hidden-xs btn btn-default">                 
               View All             
               </a>                    
               <h2 class="nomargin sm-text-center bold" style="color: rgb(41, 41, 41)">                  {{$fourth->name}}                                         
               </h2>
               <hr>
            </div>
            @foreach($fourthpost as $row)
            @if ($row->status==0)
            @elseif ($row->is_approved==0)
            @else
            <div class="col-sm-6 col-md-3 text-center bmargin">
               <div class="pic">
                  <img src="{{ url('storage/post/'.$row->image) }}">
                  <span class="pic-caption bottom-to-top">
                     <h3 class="pic-title">                                    
                        {{ \Illuminate\Support\Str::limit($row->title, 40, '...') }}                              
                     </h3>
                     <a href="{{ route('single.post',$row->slug)}}" class="btn btn-success fpad-lg vpad view-more">                          <i class="fa fa-search"></i> Read More                      </a>                            
                  </span>
               </div>
            </div>
            @endif
            @endforeach
            <div class="clearfix"></div>
            <div class="col-md-6">                    <a href="" class="btn btn-lg btn-danger btn-block visible-xs-block">View All</a>                </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   </p>
   <p>    
      @php
      $five=DB::table('categories')->skip(4)->first();
      $fivepost=DB::table('posts')->where('category_id',$five->id)->limit(8)->orderBy('id','DESC')->get();
      @endphp
   <div class="clearfix"></div>
   <div class="content-container">
      <div class="clearfix clearfix-lg"></div>
      <div class="">
         <div class="row">
            <div class="col-md-12">
               <a href="{{route('category.post',$five->slug)}}" class="pull-right hidden-xs btn btn-default">                  
               View All             
               </a>                    
               <h2 class="nomargin sm-text-center bold" style="color: rgb(41, 41, 41)">
                  {{$five->name}} 
               </h2>
               <hr>
            </div>
            @foreach($fivepost as $row)
            @if ($row->status==0)
            @elseif ($row->is_approved==0)
            @else
            <div class="col-sm-6 col-md-3 text-center bmargin">
               <div class="pic">
                  <img src="{{ url('storage/post/'.$row->image) }}">
                  <span class="pic-caption bottom-to-top">
                     <h3 class="pic-title">                                    
                        {{ \Illuminate\Support\Str::limit($row->title, 40, '...') }}                              
                     </h3>
                     <a href="{{ route('single.post',$row->slug)}}" class="btn btn-success fpad-lg vpad view-more">                          <i class="fa fa-search"></i> Read More                      </a>                            
                  </span>
               </div>
            </div>
            @endif
            @endforeach
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   </p>
   <p>
   <div class="row">
      <div class="col-md-4">
         <div class="text-center feed_head">
            <h3>Twitter</h3>
         </div>
         <div class="clearfix"></div>
         <div class="module twitter-feed hometwitter">
            <div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="col-md-4">
         <div class="text-center feed_head">
            <h3>Facebook</h3>
         </div>
         <div class="clearfix"></div>
         <div class="module">
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   </p>
   <p>
      <style type='text/css'> .carousel {    margin: 50px auto;    padding: 0 70px;}.carousel .carousel-indicators {    bottom: -40px;}#car .item{text-align:left !important}.test_sec {    float: left;    width: 15%;    margin: 10px;    text-align: center;}.test_sec1 {    float: left;    width: 80%;    margin: 10px;}.test_sec img {    border-radius: 50%;}.carousel .item {    color: #fff;    font-size: 14px;     overflow: hidden;    min-height: 207px;     margin: 22px 0px;}.carousel-control{ width:8%;}.carousel .item .img-box {    width: 135px;    height: 135px;    margin: 0 auto;    padding: 5px;    border: 1px solid #ddd;    border-radius: 50%;}.carousel-control.left,.carousel-control.right{  background-image:none !important;}.carousel .testimonial {  /*  padding: 10px 0 10px;*/}.carousel .overview {    font-style: italic;   color:#fff; padding: 10px 0 10px;}.testimonial {    color: #fff;    font-size: 15px;    /* font-weight: 600; */    margin-bottom: 0;}#car{   background:#c0d6d9;     /*#db514c*/}.overview b{   color:#fff;} </style>
   </section>
   <div class="container"></p>                    </div>
</div>
<div class="homepage-section-4">
   <div class="clearfix"></div>
   <div class="content-container">
      <div class="clearfix clearfix-lg"></div>
      <div class="container">
         <div class="row">
            @php
            $upevent=DB::table('events')->where('upcoming_event',1)->limit(8)->get();
            @endphp
            <div class="col-md-12">
               <a href="{{URL::to('upcoming-events')}}" class="view-all-btn-desktop hidden-xs btn btn-info">
               View All
               </a>
               <h2 class="nomargin sm-text-center streaming-title" style="color: rgb(41, 41, 41)">
                  Upcoming Event                        
               </h2>
               <hr>
            </div>
            <div class="row">
               @foreach($upevent as $row)
               <div class="col-md-12 slickBlogArticles">
                  <div class="col-sm-6 col-md-3 text-center bmargin ">
                     <div class="pic">
                        <img src="{{ url('storage/events/'.$row->image) }}">
                        <span class="pic-caption bottom-to-top">
                           <h3 class="pic-title">{{$row->title}}...</h3>
                           <a href="{{ route('single.past',$row->slug)}}" class="btn btn-success fpad-lg vpad view-more">
                           Read More
                           </a>
                        </span>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6">
               <a href="blog"
                  class="btn btn-lg btn-info btn-block visible-xs-block">View All</a>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>
<div class="homepage-section-5">
   <div class="clearfix clearfix-lg"></div>
   <div class="content-container">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <a href="{{URL::to('past-events')}}" class="pull-right hidden-xs btn btn-info">
               View All
               </a>
               <h2 class="nomargin sm-text-center bold" style="color: rgb(41, 41, 41)">
                  Past events                        
               </h2>
               <hr>
            </div>
            @php
            $past=DB::table('events')->where('upcoming_event',NULL)->limit(8)->get();
            @endphp
            @foreach($past as $row)
            <td class="image">
               <div class="col-sm-6 col-md-3 text-center bmargin">
                  <div class="pic">
                     <img src="{{ url('storage/events/'.$row->image) }}">
                     <span class="pic-caption bottom-to-top">
                        <h3 class="pic-title">{{$row->title}}...</h3>
                        <p></p>
                        <a href="{{ route('single.past',$row->slug)}}" class="btn btn-success fpad-lg vpad view-more">
                        Read more
                        </a>
                     </span>
                  </div>
               </div>
               @endforeach
               <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
@endsection
@push('js')
@endpush