@extends('layouts.app')

@section('content')
@can('enter_stocks')
    <h2>Goods Received</h2>
    @if(count($receives) > 0)
    @foreach($receives as $receive)
        <div class="well">
                    <h3><a href="/receive/{{$receive->id}}">{{$receive->department}}</a></h3>
                    <small>Written on {{$receive->created_at ->toDayDateTimeString() }} </small>
                        {{-- to {{$receive->user->name}}  --}}
                </div>
        
        @endforeach
        
    @else
        <p>No posts found</p>
        @endif
        @endcan
@endsection