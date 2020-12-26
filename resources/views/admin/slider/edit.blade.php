@extends('layouts.admin.app')
@section('title','config')
@push('css')
<!-- Bootstrap Select Css -->
<link href="{{ asset('admin/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
@section('content')
<div class="container-fluid">
   <!-- Vertical Layout | With Floating Label -->
      <div class="row clearfix">
         <div class="col-md-12">
            <div class="card">
               <div class="header">
                  <h2>
                     Update Configuration
                  </h2>
               </div>
                        <div class="body">
                               <form action="{{ route('admin.sliders.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                               @csrf

                                <label for="email_address">Slider</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="slider" class="form-control" >
                                    </div>
                                </div>
                                 <label for="email_address">Old Slider</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <img src="{{URL::to($slider->slider)}}" style="height: 40px;width: 70px;">
                                         <input type="hidden" name="old_slider" value="{{$slider->slider}}">
                                    </div>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">update</button>
                            </form>
                        </div>
            </div>
         </div>
      </div>
   </form>
</div>
</div>
@endsection
@push('js')
<!-- Select Plugin Js -->
<script src="{{ asset('admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
@endpush