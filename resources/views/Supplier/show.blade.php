@extends('layouts.app')

@section('content')
<a href="/Supplier" class="btn btn-default">Go Back</a>
<h1>{{$supply->supplier_name}}</h1>

<div>
    <p> Supplier Name:  {!!$supply-> supplier_name!!} </p>
    <p> Suppiler Address:  {!!$supply-> supplier_address!!} </p>
    <p> Suppiler Contact:  {!!$supply-> supplier_contact!!} </p>
    <p> Suppiler Address:  {!!$supply-> supplier_address!!} </p>
    <p> Suppiler Goods:  {!!$supply-> supplier_goods!!} </p>
    <p> Suppiler Discounts:  {!!$supply-> supplier_discounts!!} </p>
    
    

</div>
<hr>
{{-- <small>Written on {{$receive->created_at ->toDayDateTimeString() }} by {{$receive->user->name}} </small>  --}}
<hr>
<a href="/Supplier/{{$supply->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['SupplierController@destroy', $supply->supplier_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
@endsection