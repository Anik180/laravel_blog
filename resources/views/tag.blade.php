@extends('layouts.frontend.app')
@section('title') 
{{$tagpost->name}}
@endsection
@push('css')
@endpush
@section('content')
<div class="container">
   <h1 ><strong>{{$tagpost->name}}</strong></h1>
   <hr>
   @if($posts->count() > 0)
   @foreach($posts as $row)
{{--          @if($row->is_approved==0 && $row->status==0)
         @else  --}}
   <div class="search_result row-fluid member-level-4">
      <div class="grid_element">
         <div class="col-xs-4 col-sm-2 norpad"></div>
         <div class="clearfix"></div>
         <div class="img_section col-sm-4 nopad sm-bmargin">
            <a title="Growing Momentum Around Oracle Blockchain Technology" href="{{ route('single.post',$row->slug)}}">
               <div class="alert-secondary btn-block text-center">
                  <img class="search_result_image center-block" alt="" title="Growing Momentum Around Oracle Blockchain Technology" src="{{ url('storage/post/'.$row->image) }}" />
               </div>
            </a>
         </div>
         <div class="mid_section xs-nopad col-sm-8 ">
            <a class="h3 bold bmargin center-block" title="Growing Momentum Around Oracle Blockchain Technology" href="{{ route('single.post',$row->slug)}}">{{$row->title}}</a>
            <div class="clearfix"></div>
            <div class="post-location-snippet bmargin"> <span class="inline-block"> <i class="fa fa-calendar"></i> <b>{{$row->created_at}}</b>  </span> 
            </div>
            <div class="clearfix"></div>
            <p class="bpad xs-nomargin xs-nopad tmargin">{!! \Illuminate\Support\Str::limit($row->description,'150') !!}
               <a class="inline-block bold" title="Growing Momentum Around Oracle Blockchain Technology" href="{{ route('single.post',$row->slug)}}"> View More </a> 
            </p>
            <div class="clearfix"></div>
            <div class="hidden-xs row-fluid bpad">
               <a title="Growing Momentum Around Oracle Blockchain Technology" class="btn btn-success col-sm-5 view-details rmargin" href="{{ route('single.post',$row->slug)}}"> <i class="fa fa-search"></i> View Details</a>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </div>
   <div class="clearfix"></div>
{{--    @endif --}}
   @endforeach
   @else
   <div class="search_result row-fluid member-level-4">
      <h4><strong>Sorry,No post found :(</strong></h4>
   </div>
   <div class="clearfix"></div>
   @endif
</div>
@endsection
@push('js')
@endpush