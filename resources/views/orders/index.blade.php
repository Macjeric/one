@extends('layouts.app')

@section('content')
    <h2>Purchase Orders</h2>
    @if(count($orders) > 0)
    {!!Form::open(['action' => 'PrintpageController@create', 'method' => 'GET'])!!}
    <table class="table">
        <tr><th>Post</th><th>Print</th></tr>
    @foreach($orders as $order)
        {{-- <div class="well"> --}}
                <tr>
                        <td>
                    <h3><a href="/orders/{{$order->id}}">{{$order->department}}</a></h3>
                    <small>Written on {{$order->created_at->toDayDateTimeString()}} </small>
                {{-- </div> --}}
                        </td>
                      <td>  {{Form::checkbox('checkbox[]',$order->id)}}</td>

        @endforeach
    </table>
    {!! Form::submit('Next',['class'=>'btn', 'class' => 'pull-right'])!!}
    {!! Form::close()!!}
        
    @else
        <p>No posts found</p>
        @endif
@endsection