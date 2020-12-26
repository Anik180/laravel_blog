@extends('layouts.admin.app')
@section('title','volunteer')
@push('css')
<!-- Bootstrap Select Css -->
<link href="{{ asset('admin/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
@section('content')
<div class="container-fluid">
   <!-- Vertical Layout | With Floating Label -->
   <form action="{{ route('admin.volunteer.update',$volunteer->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row clearfix">
         <div class="col-md-12">
            <div class="card">
               <div class="header">
                  <h2>
                     Update volunteer
                  </h2>
               </div>
               <div class="body">
                  <div class="form-group form-float">
                     <div class="form-line">
                        <input type="text" id="title" class="form-control" name="title" value="{{$volunteer->title}}" >
                        <label class="form-label">Title</label>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
            <div class="header">
               <h2>
                  Description
               </h2>
            </div>
            <div class="body">
               <textarea id="tinymce" name="description">{{ $volunteer->description }}</textarea>
            </div>
         </div>
      </div>
      <a href="{{route('admin.dashboard')}}"  class="btn btn-danger m-t-15 waves-effect">Back</a>
      <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
</div>
<br><br>
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