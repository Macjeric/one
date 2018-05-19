@extends('layouts.app')

@section('content')

@can('print_prequest')
<h3> ONE COMPANY LIMITED </h3>
<h1> Purchase Order</h1>

{{-- {!!Form::open(['action' => ['PrintpageController@'], 'method' => 'GET'])!!} --}}
    <table class="table">
        <tr>
            <th> Item no</th>
            <th> Description</th>
            <th>Department</th>
            <th>Quantity</th>
            <th>UOM</th>
            <th>Supplier Name</th>
            <th>Supplier Address</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        @foreach($data as $order)
        <tr>
        <td>{!!$order-> item_no!!}</td>
        <td>{!!$order-> description!!}</td>
        <td>{!!$order-> department!!}</td>
        <td>{!!$order-> quantity!!}</td>
        <td>{!!$order-> uom!!}</td>
        <td>{!!$order-> supplier_name!!}</td>
        <td>{!!$order-> supplier_address!!}</td>
        <td>{!!$order-> price!!}</td>
        <td>{!!$order-> total!!}</td>
        
        </tr>
        @endforeach
    </table>

{{-- <a href="{{URL::to('print/printview')}}" class="btnPrint">Print</a>
<script type="text/javascript">
$(document).ready(function(){
    $('.btnPrint').printPage();
});
</script> --}}

{{-- @media print{ --}}
    {{-- #printpage{
        display:none;
    } --}}

<button id="printpage" onClick ="window.print()">Print</button>
    
    {{-- {!! Form::submit('Print',['class'=>'btn', 'class' => 'pull-right'])!!}
    {!! Form::close()!!} --}}
    
    @endcan
@endsection


        
