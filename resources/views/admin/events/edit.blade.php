@extends('layouts.admin.app')

@section('title','event')

@push('css')
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('admin/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <form action="{{ route('admin.events.update',$event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT EVENT
                            </h2>
                        </div>
                        <div class="body">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="title" class="form-control" name="title" value="{{ $event->title }}">
                                    <label class="form-label">Title</label>
                                </div>
                            </div>
                                            <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Start date</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="date" id="start_date" class="form-control" name="start_date" >
                                        
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">End date</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                               <input type="date" id="end_date" class="form-control" name="end_date">
                                        
                            </div>
                        </div>    
                    </div>

                </div>

                            <div class="form-group">
                                <label for="image">Featured Image</label>
                                <input type="file" name="image">
                            </div>
                            <input type="hidden" name="old_logo" value="{{ $event->image}}" />

                            <div class="form-group">
                                <input type="checkbox" id="upcoming_event" class="filled-in" name="upcoming_event" value="1" {{ $event->upcoming_event == true ? 'checked' : '' }}>
                                <label for="upcoming_event">Upcoming event</label>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Description
                            </h2>
                        </div>
                        <div class="body">
                            <textarea id="tinymce" name="description">{{ $event->description }}</textarea>
                        </div>
                    </div>
                </div>
                      <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.events.index') }}">BACK</a>
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
            </div>
     
        </form>
    </div>
@endsection

@push('js')
    <!-- Select Plugin Js -->
    <script src="{{ asset('admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- TinyMCE -->
    <script src="{{ asset('admin/plugins/tinymce/tinymce.js') }}"></script>
    <script>
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('admin/plugins/tinymce') }}';
        });
    </script>

@endpush