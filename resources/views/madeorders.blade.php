@extends('layouts.app')

@section('content')

    <h2>Order Requests</h2>
    @if(count($notifies) > 0)
    @foreach($notifies as $notify)
        <div class="well">
                    <h3><a href="/madeorders/{{$notify->id}}">{{$notify->department}}</a></h3>
                    <small>Written on {{$notify->created_at->toDayDateTimeString()}} </small>
                </div>
        
        @endforeach
        
    @else
        <p>No Orders found</p>
        @endif
       
@endsection