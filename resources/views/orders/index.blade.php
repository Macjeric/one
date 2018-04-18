@extends('layouts.app')

@section('content')
    <h2>Purchase Orders</h2>
    @if(count($orders) > 0)
    @foreach($orders as $order)
        <div class="well">
                    <h3><a href="/orders/{{$order->id}}">{{$order->department}}</a></h3>
                    <small>Written on {{$order->created_at->toDayDateTimeString()}} </small>
                </div>
        
        @endforeach
        
    @else
        <p>No posts found</p>
        @endif
@endsection