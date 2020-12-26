@extends('layouts.admin.app')
@section('title','our team')
@push('css')
<!-- Bootstrap Select Css -->
<link href="{{ asset('admin/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
@section('content')
<div class="container-fluid">
   <!-- Vertical Layout | With Floating Label -->
   <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row clearfix">
         <div class=" col-md-12">
            <div class="card">
               <div class="header">
                  <h2>
                     ADD NEW TEAM
                  </h2>
               </div>
               <div class="body">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group form-float">
                           <div class="form-line">
                              <input type="text" id="name" class="form-control" name="name">
                              <label class="form-label">Name</label>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group form-float">
                           <div class="form-line">
                              <input type="text" id="designation" class="form-control" name="designation">
                              <label class="form-label">Designation</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="image">Image</label>
                           <input type="file" name="image">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group form-float">
                           <div class="form-line">
                              <input type="text" id="facebook" class="form-control" name="facebook">
                              <label class="form-label">Facebook</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group form-float">
                           <div class="form-line">
                              <input type="text" id="twitter" class="form-control" name="twitter">
                              <label class="form-label">Twitter</label>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group form-float">
                           <div class="form-line">
                              <input type="text" id="email" class="form-control" name="email">
                              <label class="form-label">Email</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group form-float">
                           <div class="form-line">
                              <input type="text" id="linkedin" class="form-control" name="linkedin">
                              <label class="form-label">Linkedin</label>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group form-float">
                           <div class="form-line">
                              <input type="text" id="instagran" class="form-control" name="instagran">
                              <label class="form-label">Instagran</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group form-float">
                           <div class="form-line">
                              <input type="number" id="phone" class="form-control" name="phone">
                              <label class="form-label">Phone</label>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.teams.index') }}">BACK</a>
      <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
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