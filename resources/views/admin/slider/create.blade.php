@extends('layouts.admin.app')
@section('title','Slider') 

@push('css')

@endpush 
@section('content')
        <div class="container-fluid">
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add New Slider
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{route('admin.sliders.store')}}" method="POST" enctype="multipart/form-data">
                            	@csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" name="slider" class="form-control">
                                        <label class="form-label">Slider</label>
                                    </div>
                                </div>
                                <br>
                                <a href="{{route('admin.sliders.index')}}"  class="btn btn-danger m-t-15 waves-effect">Back</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </div>

@endsection
@push('js')

@endpush 