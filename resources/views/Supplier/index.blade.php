@extends('layouts.app')

@section('content')
@can('print_prequest')
    <h2>Suppliers</h2>
    @if(count($supplier) > 0)
    @foreach($supplier as $supply)
        <div class="well">
                    <h3><a href="/Supplier/{{$supply->id}}">{{$supply->supplier_name}}</a></h3>
                    {{-- <small>Written on {{$supply->created_at ->toDayDateTimeString() }} </small> --}}
                        {{-- to {{$receive->user->name}}  --}}
                </div>
        
        @endforeach
        
    @else
        <p>No posts found</p>
        @endif
        @endcan
@endsection