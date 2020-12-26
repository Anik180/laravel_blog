@extends('layouts.frontend.app')
@section('title') 
member
@endsection
@push('css')
@endpush
@section('content')
<div id="first_container" class="content-container fr-view">
   <div class="container">
      <div class="clearfix body-content"></div>
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="pagehead">
                  <h3 style="text-align: left;">Our Member</h3>
               </div>
               @foreach($member as $row)
               <div class="col-md-3">
                  <div class="module">
                     <div class="image_div">
                        <img src="{{ url('storage/member/'.$row->image) }}" class="fr-fic fr-dii">
                     </div>
                     <div class="content">
                        <h4 class="tmargin">
                           {{$row->title}}        
                        </h4>
                        <p>{{$row->short_title}} </p>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <!-- Closes Row -->
      <div class="clearfix"></div>
   </div>
</div>
@endsection
@push('js')
@endpush