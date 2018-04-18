@extends('layouts.app')

@section('content')

@can('print_prequest')
<h3> ONE COMPANY LIMITED </h3>
<h1> Purchase Request</h1>

{{-- {!!Form::open(['action' => ['PrintpageController@'], 'method' => 'GET'])!!} --}}
    <table class="table">
        <tr>
            <th> Stock Number</th>
            <th>Stock Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Tax Code</th>
            <th>Department</th>
        </tr>
        @foreach($data as $post)
        <tr>
        <td>{!!$post-> StockNumber!!}</td>
        <td>{!!$post-> StockName!!}</td>
        <td>{!!$post-> Quantity!!}</td>
        <td>{!!$post-> PriceInfo!!}</td>
        <td>{!!$post-> Discount!!}</td>
        <td>{!!$post-> TAX!!}</td>
        <td>{!!$post-> Department!!}</td>
        </tr>
        @endforeach
    </table>
    {!! Form::submit('Print',['class'=>'btn', 'class' => 'pull-right'])!!}
    {!! Form::close()!!}
    
    @endcan
@endsection


        
