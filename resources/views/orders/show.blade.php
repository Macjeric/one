@extends('layouts.app')

@section('content')
<a href="/orders" class="btn btn-default">Go Back</a>
<h1>{{$order->department}}</h1>

<div>
    <p> Item no:  {!!$order-> item_no!!} </p>
    <p> Description:  {!!$order-> description!!} </p>
    <p> Department:  {!!$order-> department!!} </p>
    <p> Quantity:  {!!$order-> quantity!!} </p>
    <p> UOM:  {!!$order-> uom!!} </p>
    <p> Price:  {!!$order-> price!!} </p>
    <p> Total:  {!!$order-> total!!} </p>

</div>
<hr>
<small>Written on {{$order->created_at->toDayDateTimeString()}} </small> 
<hr>
<a href="/posts/{{$order->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['OrdersController@destroy', $order->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        
@endsection