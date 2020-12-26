@extends('layouts.frontend.app')
@section('title') 
our team
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
                     <h1>Our team</h1>
                  </div>
                  <p>
                  <table style="width: 62%; margin-right: calc(38%);">
                     <tbody>
                     	@foreach($team as $row)
                        <tr>
                           <td style="width: 35.4767%;">
                              <div data-empty="true">             <br>           </div>
                              <div><img src="{{ url('storage/team/'.$row->image) }}" style="width: 190px; height: 190px; border-radius: 50px;" class="fr-dib"></div>
                           </td>
                           <td style="width: 64.3016%;">
                              <div><strong>{{$row->name}}</strong></div>
                              <div>{{$row->designation}}</div>
                              <div>
                                 <ul class="chapter_icons">
                                    <li>
                                    	<a href="mailto:{{$row->email}}"><i class="fa fa-envelope"></i>&nbsp;</a>
                                    </li>
                                    <li>
                                    	<a href="{{$row->twitter}}"><i class="fa fa-twitter-square"></i>&nbsp;</a>
                                    </li>
                                    <li>
                                    	<a href="{{$row->linkedin}}"><i class="fa fa-linkedin-square"></i>&nbsp;</a>
                                    </li>
                                    <li>
                                    	<a href="{{$row->facebook}}"><i class="fa fa-facebook-square"></i>&nbsp;</a>
                                    </li>
                                    <li>
                                    	<a href="{{$row->instagram}}"><i class="fa fa-instagram-square"></i>&nbsp;</a>
                                    </li>
                                    <li>
                                    	<a title="{{$row->phone}}"><i class="fa fa-phone-square"></i>&nbsp;</a>
                                    </li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  </p>        
               </div>
            </div>
            <!-- Closes Row -->
            <div class="clearfix"></div>
         </div>
      </div>

@endsection
@push('js')
@endpush