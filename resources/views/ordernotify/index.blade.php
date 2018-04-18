@extends('layouts.app')

@section('content')
@can('enter_stocks')
    <h2>Orders</h2>
    @if(count($notifies) > 0)
    @foreach($notifies as $notify)
        <div class="well">
                    <h3>{{$notify->item}}</a></h3>
                    <small>Written on {{$notify->created_at ->toDayDateTimeString() }} </small>
                        {{-- to {{$receive->user->name}}  --}}
                </div>
        
        @endforeach
        
    @else
        <p>No posts found</p>
        @endif
    @endcan
@endsection