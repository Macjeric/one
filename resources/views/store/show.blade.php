@extends('layouts.app')

@section('content')
<a href="/store" class="btn btn-default">Go Back</a>
<h1>{{$main->department}}</h1>

<div>
    <p> Supplier Name:  {!!$main-> supplier_name!!} </p>
    <p> Suppiler Address:  {!!$main-> supplier_address!!} </p>
    <p> Item Description:  {!!$main-> item!!} </p>
    <p> Department:  {!!$main-> department!!} </p>
    <p> Received:  {!!$main-> received!!} </p>
    <p> Quantity:  {!!$main-> quantity!!} </p>
    <p> Price Each:  {!!$main-> price_each!!} </p>
    <p> Total:  {!!$main-> total!!} </p>

</div>
<hr>
<small>Written on {{$main->created_at ->toDayDateTimeString() }} by {{$main->user->name}} </small> 
<hr>
<a href="/store/{{$main->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['MainStoreController@destroy', $main->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        
@endsection