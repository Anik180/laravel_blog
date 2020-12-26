@extends('layouts.admin.app')

@section('title','event')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <a href="{{ route('admin.events.index') }}" class="btn btn-danger waves-effect">BACK</a>
        <br>
        <br>
            <div class="row clearfix">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                              {{ $event->title }}
                               
                            </h2>
                        </div>
                        <div class="body">
                            {!! $event->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div class="card">
                    <div class="header bg-amber">
                        <h2>
                        Featured Image
                        </h2>
                    </div>
                    <div class="body">
                        <img class="img-responsive thumbnail" src="{{ url('storage/events/'.$event->image) }}" alt="" >
                    </div>
                </div>
                </div>
            </div>
    </div>
@endsection

@push('js')
    <!-- Select Plugin Js -->
    <script src="{{ asset('admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- TinyMCE -->
    <script src="{{ asset('admin/plugins/tinymce/tinymce.js') }}"></script>
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
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
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });
    </script>

@endpush