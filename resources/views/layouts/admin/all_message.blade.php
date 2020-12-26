@extends('layouts.admin.app')
@section('title','more message') 

@push('css')

@endpush 
@section('content')
@foreach($allmessage as $row)
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>
                       {{$row->name}} 
                       <h5>{{$row->email}} </h5>
                       <h5>{{$row->phone}} </h5>
                    </h2>
                </div>
                <div class="body">
                   {!!$row->message!!} 
                </div>
            </div>
        </div>
@endforeach
@endsection
@push('js')

@endpush 