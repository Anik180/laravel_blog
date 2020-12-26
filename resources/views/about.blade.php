@extends('layouts.frontend.app')
@section('title') 
about
@endsection
@push('css')
@endpush
@section('content')
      <div id="first_container" class="content-container fr-view">
         <div class="container">
            <div class="clearfix body-content"></div>
            <div class="row">
               <div class="col-md-12">
                  <div class="pagehead">
                     <h1>About</h1>
                  </div>

                  	{!!$about->description!!}


               </div>
            </div>
            <!-- Closes Row -->
            <div class="clearfix"></div>
         </div>
      </div>

@endsection
@push('js')
@endpush