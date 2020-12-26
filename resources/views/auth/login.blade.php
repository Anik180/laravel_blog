@extends('layouts.frontend.app')
@section('title','Login') 
@push('css')
@endpush 
@section('content')
<div class="container">
   <div class="clearfix body-content"></div>
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         <p><br></p>
         <table class="froala-table" style="width: 100%;">
            <tbody>
               <tr>
                  <td style="width:50%;">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="module nobmargin">
                              <h2>Login</h2>
                              <hr>
                              <style type="text/css">
                                 label span.required { color: #B94A48; }
                                 span.help-inline, span.help-block {font-size: .9em; }
                              </style>
                              <form method="POST" action="{{ route('login') }}">
                                 @csrf
                                 <div class="form-group">
                                    <label class="vertical-label bd-text">
                                    {{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                                 <div class="form-group">
                                    <label class="vertical-label bd-email" for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                                 <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                          <label class="form-check-label" for="remember">
                                          {{ __('Remember Me') }}
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-actions">
                                    <button type="submit"  name="submit" class="btn btn-primary btn-lg btn-block"/>{{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
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
</div>
<!-- Closes Row -->
<div class="clearfix"></div>
</div>
@endsection
@push('js')
@endpush