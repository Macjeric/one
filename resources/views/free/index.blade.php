@extends('layouts.app')

@section('content')
@can('enter_stocks')
@can('purchase_request')
    <h2>Purchases Requests</h2>
    @if(count($posts) > 0)
    @foreach($posts as $post)
        <div class="well">
                    <h3><a href="../posts/{{$post->id}}">{{$post->Department}}</a></h3>
                    <small>Written on {{$post->created_at->toDayDateTimeString()}} </small>
                </div>
        
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
        @endif
        @endcan
        @endcan
@endsection