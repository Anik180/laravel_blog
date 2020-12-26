@extends('layouts.frontend.app')
@section('title') 
volunteer
@endsection
@push('css')
@endpush
@section('content')

<!-- Begin  Content -->
<div id="first_container" class="content-container fr-view">
   <div class="container">
      <div class="clearfix body-content"></div>
      <div class="row">
         <div class="col-md-12">
            <div class="pagehead">
               <h1>{{$volunteer->title}}</h1>
            </div>
            <div>
            	{!!$volunteer->description!!}
            </div>
            <br><br>
            <div class="row">
               <div class="col-md-6 col-md-offset-3">
                  <div class="module nobmargin">
                     <h2>Voulnteer with Us</h2>
                     <hr>
                     <style type="text/css">label span.required { color: #B94A48; }span.help-inline, span.help-block {font-size: .9em; }</style>
                     <form action="{{URL::to('store-voulnteer')}}"  method="POST">
                     	@csrf
                        <div class="form-group">
                           <label class="vertical-label bd-text" for="myform2-element-6">Name</label>
                           <input type="text" name="name" placeholder="Enter Name" autocomplete="off"  class="form-control control-group  form-control " id="myform2-element-6"/>
                        </div>
                        <div class="form-group">
                           <label class="vertical-label bd-email" for="myform2-element-7">
                           <span class="required">* </span>Email</label>
                           <input type="email" name="email" required placeholder="Enter Email" autocomplete="off"  class="form-control control-group  form-control " id="myform2-element-7"/>
                        </div>
                        <div class="form-group">
                           <label class="vertical-label bd-text" for="myform2-element-8">Phone Number</label>
                           <input type="text" name="phone" placeholder="Enter Phone" autocomplete="off"  class="form-control control-group  form-control " id="myform2-element-8"/>
                        </div>
                        <div class="form-group">
                           <label class="vertical-label bd-text" for="myform2-element-9">Company</label>
                           <input type="text" name="company" placeholder="Enter Company" autocomplete="off"  class="form-control control-group  form-control " id="myform2-element-9"/>
                        </div>
                        <div class="form-group">
                           <label class="vertical-label bd-radio" for="myform2-element-10">Are you member?</label>
                           <div class="radio "> 
                              <label>
                              <input id="myform2-element-10-0" type="radio" name="are_you_member" autocomplete="off" value="Yes"/> Yes </label>
                           </div>
                           <div class="radio "> 
                              <label>
                              <input id="myform2-element-10-1" type="radio" name="are_you_member" autocomplete="off" value="No"/> No </label>
                           </div>
                           <div class="radio ">
                              <label>
                              <input id="myform2-element-10-2" type="radio" name="are_you_member" autocomplete="off" value="like to Join"/> Like to Join </label>
                           </div>
                        </div>
                        <div class="form-actions">
                           <button type="submit" id="submit" name="submit" 
                              class="btn btn-success btn-lg">
                           submit
                           </button>
                        </div>
                     </form>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            </p>        
         </div>
      </div>
      <!-- Closes Row -->
      <div class="clearfix"></div>
   </div>
</div>
<!-- End Content -->
@endsection
@push('js')
@endpush