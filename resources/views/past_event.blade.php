@extends('layouts.frontend.app')
@section('title') 
past event
@endsection
@push('css')
@endpush
@section('content')
<br>
<div class="container">
   <h1 ><strong>Past event</strong></h1>
   <hr>
   @if($past_events->count() > 0)
   @foreach($past_events as $row)
   <div class="search_result row-fluid member-level-4">
      <div class="grid_element">
         <div class="col-xs-4 col-sm-2 norpad"></div>
         <div class="clearfix"></div>
         <div class="img_section col-sm-4 nopad sm-bmargin">
            <a title="{{$row->title}}" href="{{ route('single.past',$row->slug)}}">
               <div class="alert-secondary btn-block text-center">
                  <img class="search_result_image center-block" alt="" title="{{$row->title}}" src="{{ url('storage/events/'.$row->image) }}" />
               </div>
            </a>
         </div>
         <div class="mid_section xs-nopad col-sm-8 ">
            <a class="h3 bold bmargin center-block" title="{{$row->title}}" href="{{ route('single.past',$row->slug)}}">{{$row->title}}</a>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <p class="bpad xs-nomargin xs-nopad tmargin">{!! \Illuminate\Support\Str::limit($row->description,'150') !!}
               <a class="inline-block bold" title="{{$row->title}}" href="{{ route('single.past',$row->slug)}}"> View More </a> 
            </p>
            <div class="clearfix"></div>
            <div class="hidden-xs row-fluid bpad">
               <a title="{{$row->title}}" class="btn btn-success col-sm-5 view-details rmargin" href="{{ route('single.past',$row->slug)}}"> <i class="fa fa-search"></i> View Details</a>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </div>
{{--    @endif --}}
   <div class="clearfix"></div>
   @endforeach
   @else
   <div class="search_result row-fluid member-level-4">
      <h4><strong>Sorry,No past event found :(</strong></h4>
   </div>
   <div class="clearfix"></div>
   @endif
</div>
@endsection
@push('js')
@endpush