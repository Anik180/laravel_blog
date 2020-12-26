@extends('layouts.admin.app')
@section('title','Tag') 

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
                                Update Category
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{route('admin.category.update',$category->id)}}" method="POST">
                            	@csrf
                            	@method('PUT')
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" value="{{$category->name}}">
                                        <label class="form-label">Category Name</label>
                                    </div>
                                </div>
                                <br>
                                <a href="{{route('admin.category.index')}}"  class="btn btn-danger m-t-15 waves-effect">Back</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
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