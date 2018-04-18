@extends('layouts.app')

@section('content')
@can('print_prequest')
    <h2>Purchases Requests</h2>
    
    @if(count($posts) > 0)
    {!!Form::open(['action' => ['PrintpageController@display'], 'method' => 'GET'])!!}
    <table class="table">
        <tr><th>Post</th><th>Print</th></tr>
    @foreach($posts as $post)
    <tr>
        <td>
        {{--  <div class="well">       --}}
            <h3><a href="/posts/{{$post->id}}">{{$post->Department}}</a></h3>
            <small>Written on {{$post->created_at ->toDayDateTimeString()}} by {{$post->user->name}} </small>
        {{--  </div>  --}}
        </td>
        <td>
            {{Form::checkbox('checkbox[]',$post->id)}}</td>
        @endforeach
        {{$posts->links()}}
        
    </table>
    {!! Form::submit('Next',['class'=>'btn', 'class' => 'pull-right'])!!}
    {!! Form::close()!!}
    {{--  <a href="/print/$_GET[checkbox]" class="btn btn-default pull-right">Next</a>  --}}
    @else
        <p>No posts found</p>
        @endif
        @endcan 
@endsection