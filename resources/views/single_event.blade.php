@extends('layouts.frontend.app')
@section('title') 
{{$singleevents->title}}
@endsection
@push('css')

@endpush
@section('content')

<div id="first_container" class="content-container fr-view">
<div class="container">
<ol class='breadcrumb' itemscope itemtype='https://schema.org/BreadcrumbList'>
   <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
      <a itemtype='https://schema.org/Thing' itemprop='item' href='{{route('home')}}' title='AIOUG'>
         <span itemprop='name'>Home</span>
         <meta itemprop='position' content='1' />
      </a>
   </li>
   <li class='active'>{{$singleevents->title}}</li>
</ol>
<div class="clearfix body-content"></div>
<div class="row content_w_sidebar feature-post">
<div class="col-md-8">
<div id="post-content">
   <div class="module fpad bmargin posted-by-snippet">

      <div class="col-xs-4 col-sm-3 nopad text-right">
         <style type='text/css'> .print-btn {
            padding: 2px 8px;
            margin-left: 5px;
            } 
         </style>
         <button class="btn btn-default btn-sm pull-right print-btn hidden-xs" onclick="window.print()">
         <i class="fa fa-print" ></i> Print
         </a>
      </div>
      <div class="clearfix"></div>
   </div>
   <div class="row">
      <div class="col-md-12 vmargin">
         <h1 class="bold h2">{{$singleevents->title}}</h1>
         <div class="clearfix"></div>
         <div class="clearfix"></div>
      </div>
   </div>
   <div class="alert-secondary btn-block text-center" style="margin-bottom:15px">
      <img class="center-block" alt="Agile and DevOps for the Oracle Cloud" title="Agile and DevOps for the Oracle Cloud" src="{{ url('storage/events/'.$singleevents->image) }}" />
      <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
   <div class="row">
      <div class="clearfix"></div>
   </div>
   <div class="well">
      <div class="well text-center bmargin">
         <div class="row">
            <div class="col-sm-6 xs-bmargin">
               <b> <i class="fa fa-calendar"></i>Start date</b> <br>
               {{ date("F jS, Y", strtotime($singleevents->start_date)) }} 
            </div>
            <div class="col-sm-6">
               <b> <i class="fa fa-calendar"></i>End date</b> <br>
               {{ date("F jS, Y", strtotime($singleevents->end_date)) }} 
            </div>
         </div>
      </div>
      <div class="the-post-description">
         <p>
         	{!!$singleevents->description!!}
         </p>
         <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
      <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
</div>        
<style>span.co_span {
  border: 4px solid #000;
  border-style: dashed;
  border-radius: 5px;
  padding: 0;
  font-size: 19px;
  text-align: center;
  font-weight: 700;
  text-transform: uppercase;
}

span.cl_span {
  border: 4px solid #d22921;
  border-radius: 4px;
  color: #d22921;
  text-align: center;
  font-weight: 700;
  text-transform: uppercase;
  padding: 0;
  font-size: 19px;
}

.attend-events,
.register-events,
.register-events1,
.btn-subscribed,
.attend-events1 {
  padding: 6px 48px;
  border-radius: 30px !important;
  font-size: 19px;
  font-weight: 700;
  color: #fff !important;
  margin-top: 35px;
}

.register-events,
.btn-subscribed,
.attend-events1,
.register-events1 {
  background: #13e113;
  border: 1px solid #13e113;
}

.attend-events {
  background: #ff8300;
  border: 1px solid #ff8300;
}

.register-events:hover,
.attend-events1:hover,
.btn-subscribed:hover,
.register-events1:hover {
  background: #38af38;
  border: 1px solid #38af38;
}

.attend-events:hover {
  background: #e37e14;
  border: 1px solid #e37e14;
}

.max_count {
  position: relative;
}

.max_count img {
  width: auto;
  height: 35px;
}

.max_div {
  position: absolute;
  top: 12px;
  left: 16px;
  /* right: 0; */
  /* bottom: 0; */
  /* margin: auto; */
  /* display: inline-block; */
  /* width: 26%; */
  /* height: 26%; */
  font-weight: 700;
  font-size: 15px !important;
}

.pass_modal_content {
  padding: 15px
}

</style><style>.alert-secondary {
  background-color: #fff !important;
}

.sess_date {
  margin: 10px 0;
  font-size: 15px;
}

.sess_title label,
.sess_title1 label {
  color: #f2cccc;
  padding: 0 7px;
  margin: 0;
  border-right: 1px solid #595959;
  margin-right: 8px;
  vertical-align: top;
}

.sess_date .fa.fa-circle,
.sess_date1 .fa.fa-circle {
  font-size: 5px !important;
  /* margin: 10px 0; */
  vertical-align: middle;
}

.sp_info {
  margin-left: 15px;
  /* float: left; */
  padding: 0px 10px;
}

.sp_image {
  float: left;
  border-radius: 50%;
  height: 150px;
  width: 150px;
  margin: 10px;
}

.sess_title,
.sess_title1 {
  background: #ea7b7b;
  padding: 5px 5px;
  border-radius: 4px;
}

.all_speakers {
  margin: 10px 0;
}

.sub_label {
  background: #ff8300;
  padding: 10px;
  border-radius: 9px;
  font-size: 18px;
  font-weight: 700;
  color: #fff;
  margin: 47px;
}

.sp_info div span {
  color: #9d9d9d;
}

.sp_tit {
  color: rgb(162, 0, 0)
}

.acf_logos img {
  width: 50px;
  height: 50px;
  border: 1px solid #f2f2f2;
  padding: 5px;
  box-shadow: 0px 1px 7px 3px #ccc;
  border-radius: 50%;
  top: 126px;
  background: #fff;
  left: 15%;
  position: absolute;
}

.ac_1 {
  z-index: !important;
  /* left: 15% !important; */
  /* top: 66% !important; */
  width: 44px !important;
  height: 44px !important;
  /* z-index: 99; */
}

.ac_2 {
  left: -11%;
  /* z-index: 9999; */
  /* z-index: 999999 !important; */
  /* left: 13% !important; */
  /* top: -21% !important; */
  width: 44px !important;
  height: 44px !important;
  left: 11% !important;
}

.dp_div_image {
  padding: 80px;
  float: left;
  background-position: center center;
  background-size: contain;
  background-repeat: no-repeat;
  border-radius: 1000px;
  background-color: #fff;
  margin: 5px 7px;
}

</style>
<style>
.comments-details button.btn.dropdown-toggle,
.comments-details .total-comments {
    font-size: 18px;
    font-weight: 500;
    color: #5e5e5e;
}
.comments-details {
    padding: 15px 15px;
}
.comments .comments .dropdown,
.comments .dropup {
    position: relative;
}
.comments button {
    background-color: transparent;
    border: none;
}
.comments .comment-box {
    width: 100%;
    float: left;
    height: 50%;
    background-color: #FAFAFA;
    padding: 10px 10px 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ddd;
}
.comments .add-comment {
    background-color: transparent;
    border: none;
    position: relative;
    margin-bottom: 5px;
}
.comments .commenter-pic {
    width: 50px;
    height: 50px;
    display: inline-block;
    border-radius: 100%;
    border: 2px solid #fff;
    overflow: hidden;
    background-color: #fff;
}
.comments .add-comment .commenter-name {
    width: 100%;
    padding-left: 75px;
    position: absolute;
    top: 20px;
    left: 0px;
}
.comments .add-comment input {
    border-top: 0px;
    border-bottom: 1px solid #ccc;
    border-left: 0px;
    border-right: 0px;
    outline: 0px;
    box-shadow: none;
    border-radius: 0;
    width: 100%;
    padding: 0;
    font-weight: normal;
}
.comments .add-comment input:focus {
    border-color: #03a9f4;
    border-width: 2px;
}
.comments .add-comment button[type=submit] {
    background-color: #03a9f4;
    color: #fff;
    margin-right: 0px;
}
.comments .add-comment button {
    background-color: #f5f5f5;
    margin: 10px 5px;
    font-size: 14px;
    text-transform: uppercase;
    float: right;
}
.comments .commenter-name .comment-time {
    font-weight: normal;
    margin-left: 8px;
    font-size: 15px;
}
.comments p.comment-txt {
    font-size: 15px;
    border-bottom: 1px solid #ddd;
    padding: 0px 0px 15px;
}
.comments .commenter-name {
    display: inline-block;
    position: relative;
    top: -20px;
    left: 10px;
    font-size: 16px;
    font-weight: bold;
}
.comments .comment-meta {
    font-size: 14px;
    color: #333;
    padding: 2px 5px 0px;
    line-height: 20px;
    float: right;
}
.comments .reply-box {
    display: none;
}
.comments .replied {
    background-color: #fff;
    width: 95%;
    float: right;
    margin-top: 15px;
}

/*======Responsive CSS=======*/
@media (max-width: 767px){
.comments .commenter-name {
    font-size: 13px;
    top: -5px;
}
.comments .commenter-pic {
    width: 40px;
    height: 40px;
}
.comments .commenter-name a{
  display: block;
}
.comments .commenter-name .comment-time{
  display: block;
  margin-left: 0px;
}
}
</style>
</div><!-- ENDS <div class="col-lg-12"> -->
<style type='text/css'>.author-snapshot span.author-phone {
  font-size: 14px;
  padding: 6px 12px!important;
  border-radius: 4px;
}

</style><style>#sidebar-map-canvas {
  height: 100%;
  margin-bottom: 5px;
  width: 100%;
}

</style><style type='text/css'>.col-md-3 .social_share_buttons .col-xs-3,
.col-lg-3 .social_share_buttons .col-xs-3 {
  transform: scale(.96);
}

.social_share_buttons .fb-share-button,
.social_share_buttons .fb-share-button span,
.social_share_buttons .fb-share-button a,
.social_share_buttons .twitter-share-button,
.social_share_buttons .IN-widget {
  vertical-align: top!important;
  display: inline-block!important;
}

.fbMobilePopUp {
  color: #fff;
  background-color: #3b5998;
  padding: 2px 9px;
  font-size: 11px;
  font-weight: 500;
  border-radius: 7%;
  position: relative;
  top: -1px;
}

.fbMobilePopUp:hover {
  color: #fff !important;
  background-color: #354f87
}

</style><style type='text/css'>.upgarde_btn:hover {
  background: #43b743;
  color: #fff;
}

.upgarde_btn {
  background: #17db17;
  color: #fff;
  font-size: 20px;
  font-weight: 700;
  margin: 10px;
  border-radius: 43px !important;
}

</style>
</div>
  </div>  <!-- <div class="col-md-8"> -->
 <div class="clearfix"></div>
</div>
</div>
@endsection
<script>
// Reply box popup JS
$(document).ready(function(){
  $(".reply-popup").click(function(){
    $(".reply-box").toggle();
  });
});
</script>
@push('js')

@endpush