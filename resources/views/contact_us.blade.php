@extends('layouts.frontend.app')
@section('title') 
contact us
@endsection
@push('css')
@endpush
@section('content')
<div class="clearfix"></div>
<!-- Begin  Content -->
<div id="first_container" class="content-container fr-view">
   <div class="container">
      <div class="clearfix body-content"></div>
      <div class="row">
         <div class="col-md-12">
            <p><br></p>
            <table class="froala-table" style="width: 100%;">
               <tbody>
                  <tr>
                     <td style="width:50%;">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="module nobmargin">
                                 <h2>Contact Us</h2>
                                 <hr>
                                 <style type="text/css">
                                    label span.required { color: #B94A48; }
                                    span.help-inline, span.help-block {font-size: .9em; }
                                 </style>
                                 <form action="{{URL::to('store-message')}}" method="POST">
                                 	@csrf
                                    <div class="form-group">
                                       <label class="vertical-label bd-text" for="contact_form_bootstrap2-element-5">
                                       <span class="required">* </span>Name</label>
                                       <input type="text" name="name" autocomplete="off" value class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                       <label class="vertical-label bd-email" for="contact_form_bootstrap2-element-6">
                                       	<span class="required">* </span>Email</label>
                                       <input type="email" name="email" autocomplete="off" value class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                       <label class="vertical-label bd-tel" for="contact_form_bootstrap2-element-7"><span class="required">* </span>Phone Number</label>
                                       <input type="number" name="phone" autocomplete="off" value class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                       <label class="vertical-label bd-" for="contact_form_bootstrap2-element-8"><span class="required">* </span>Enter A Message</label>
                                       <textarea rows="4" name="message" autocomplete="off" class="form-control" ></textarea>
                                    </div>
                                    <div class="form-actions">
                                       <button type="submit"  name="submit" class="btn btn-primary btn-lg btn-block"/>Send Message</button>
                                    </div>
                                 </form>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
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