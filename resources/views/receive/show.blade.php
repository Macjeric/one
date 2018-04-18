@extends('layouts.app')

@section('content')
<a href="/receive" class="btn btn-default">Go Back</a>
<h1>{{$receive->department}}</h1>

<div>
    <p> Supplier Name:  {!!$receive-> supplier_name!!} </p>
    <p> Suppiler Address:  {!!$receive-> supplier_address!!} </p>
    <p> Item Description:  {!!$receive-> item!!} </p>
    <p> Department:  {!!$receive-> department!!} </p>
    <p> Received:  {!!$receive-> received!!} </p>
    <p> Quantity:  {!!$receive-> quantity!!} </p>
    <p> Price Each:  {!!$receive-> price_each!!} </p>
    <p> Total:  {!!$receive-> total!!} </p>

</div>
<hr>
<small>Written on {{$receive->created_at ->toDayDateTimeString() }} by {{$receive->user->name}} </small> 
<hr>
<a href="/receive/{{$receive->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['ReceivesController@destroy', $receive->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        
@endsection