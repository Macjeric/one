@extends('layouts.app')

@section('content')
@can('enter_stocks')
    <h2>Goods Received</h2>
    @if(count($mains) > 0)
    @foreach($mains as $main)
        <div class="well">
                    <h3><a href="/store/{{$main->id}}">{{$main->department}}</a></h3>
                    <small>Written on {{$main->created_at ->toDayDateTimeString() }} Approved by {{$main->user->name }} </small>
                        {{-- to {{$main->user->name}}  --}}
                </div>
        
        @endforeach
        
    @else
        <p>No posts found</p>
        @endif
        @endcan
@endsection