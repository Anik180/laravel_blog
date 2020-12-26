@extends('layouts.frontend.app')
@section('title') 
request pending
@endsection
@push('css')
@endpush
@section('content')
<div id="first_container" class="content-container fr-view">
   <style type="text/css"> #first_container {
      height: auto!important;
      } 
   </style>
   <div class="clearfix clearfix-lg"></div>
   <div class="clearfix clearfix-lg"></div>
   <div class="col-md-offset-3 col-md-6 well text-center test">
      <h1>Thankyou for connecting, We will contact you soon for your inquiry.</h1>
      <hr>
      <a class="btn btn-lg btn-success go-back-btn" href="{{URL::to('volunteer')}}">« Back To Previous Page</a>
   </div>
   <div class="clearfix clearfix-lg"></div>
   <div class="clearfix clearfix-lg"></div>
   <div class="clearfix clearfix-lg"></div>
   <div class="clearfix clearfix-lg"></div>
</div>
@endsection
@push('js')
@endpush