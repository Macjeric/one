@extends('layouts.app')

@section('content')
<a href="/requisition" class="btn btn-default">Go Back</a>
<h1>{{$requisition->department}}</h1>

<div>
    <p> Description:  {!!$requisition-> description!!} </p>
    <p> Quantity/Units:  {!!$requisition-> quantity!!} </p>
    <p> Manager Approval:  {!!$requisition-> department!!} </p>

</div>
<hr>
<small>Written on {{$requisition->created_at ->toDayDateTimeString() }} by {{$requisition->user->name}} </small> 
<hr>
<a href="/requisition/{{$requisition->id}}/edit" class="btn btn-default">Edit</a>

{{-- {!!Form::open(['action' => ['requisitionsController@destroy', $requisition->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}} --}}
                {{-- {{Form::submit('Delete', ['class' => 'btn btn-danger'])}} --}}
            {!!Form::close()!!}
        
@endsection