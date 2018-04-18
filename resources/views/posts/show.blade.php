@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$post->Department}}</h1>

<div>
    <p> Stock Name:  {!!$post-> StockName!!} </p>
    <p> Stock Number:  {!!$post-> StockNumber!!} </p>
    <p> Quantity:  {!!$post-> Quantity!!} </p>
    <p> Price:  {!!$post-> PriceInfo!!} </p>
    <p> Discount:  {!!$post-> Discount!!} </p>
    <p> Tax Code:  {!!$post-> TAX!!} </p>

</div>
<hr>
<small>Written on {{$post->created_at->toDayDateTimeString()}} by {{$post->user->name}} </small> 
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        
@endsection