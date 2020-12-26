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
                               <form action="{{ route('admin.update.config',$config->id) }}" method="POST" enctype="multipart/form-data">
                               @csrf

                                <label for="email_address">Logo</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="logo" class="form-control" >
                                    </div>
                                </div>
                                 <label for="email_address">Old Logo</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <img src="{{URL::to($config->logo)}}" style="height: 40px;width: 70px;">
                                         <input type="hidden" name="old_logo" value="{{$config->logo}}">
                                    </div>
                                </div>
                                 <label for="email_address">Fav icon</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="fav_icon" class="form-control" >
                                    </div>
                                </div>
                                 <label for="email_address">Old Fav icon</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <img src="{{URL::to($config->fav_icon)}}" style="height: 40px;width: 70px;">
                                         <input type="hidden" name="old_fav_icon" value="{{$config->fav_icon}}">
                                    </div>
                                </div>
                                <label>About</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="about" class="form-control" value="{{$config->about}}">
                                    </div>
                                </div>
                                 <label>Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" class="form-control" value="{{$config->email}}">
                                    </div>
                                </div>
                                 <label>Facebook url</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="facebook_url" class="form-control" value="{{$config->facebook_url}}">
                                    </div>
                                </div>
                                 <labe>Twitter url</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="twitter_url" class="form-control" value="{{$config->twitter_url}}">
                                    </div>
                                </div>
                                 <label>Linkedin url</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="linkedin_url" class="form-control" value="{{$config->linkedin_url}}">
                                    </div>
                                </div>
                                 <label>Youtube url</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="youtube_url" class="form-control" value="{{$config->youtube_url}}">
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