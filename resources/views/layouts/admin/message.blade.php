@extends('layouts.admin.app')
@section('title','message') 

@push('css')

@endpush 
@section('content')
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>
                       {{$singlemessage->name}} 
                       <h5>{{$singlemessage->email}} </h5>
                       <h5>{{$singlemessage->phone}} </h5>
                    </h2>
                </div>
                <div class="body">
                   {!!$singlemessage->message!!} 
                </div>
            </div>
        </div>
@endsection
@push('js')

@endpush 