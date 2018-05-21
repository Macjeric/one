@extends('layouts.app')

@section('content')
    <h2>Requisitions notes</h2>
    <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
    @if(count($requisitions) > 0)
    @foreach($requisitions as $requisition)
        <div class="well">
            
                    <h3><a href="/requisition/{{$requisition->id}}">{{$requisition->department}}</a></h3>
                    <small>Written on {{$requisition->created_at ->toDayDateTimeString()}} by {{$requisition->user->name }} </small>
                        {{-- to {{$receive->user->name}}  --}}
                </div>
        
        @endforeach
        
    @else
        <p>No posts found</p>
        @endif
        
@endsection