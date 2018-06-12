@extends('layouts.app')

@section('content')

@can('enter_stocks')
<div style="text-align:center">
<h2> ONE COMPANY LIMITED </h2>
<h3> Received Goods</h3>
</div>

{{-- {!!Form::open(['action' => ['PrintpageController@'], 'method' => 'GET'])!!} --}}
    <table class="table">
        <tr>
            <th> Supplier Name</th>
            <th> Suppiler Address</th>
            <th>Item Description</th>
            <th>Department</th>
            <th>Received</th>
            <th>Quantity</th>
            <th>Price Each</th>
            <th>Total</th>
        </tr>
        @foreach($rece as $receive)
        <tr>
        <td>{!!$receive-> supplier_name!!}</td>
        <td>{!!$receive-> supplier_address!!}</td>
        <td>{!!$receive-> item!!}</td>
        <td>{!!$receive-> department!!}</td>
        <td>{!!$receive-> received!!}</td>
        <td>{!!$receive-> quantity!!}</td>
        <td>{!!$receive-> price_each!!}</td>
        <td>{!!$receive-> total!!}</td>
        
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

<button id="printbutton" onClick =" myfunction(); window.print();">Print</button>
<script>
    function myfunction(){
        var x = document.getElementById("printbutton");
        if(x.style.display === "none"){
            x.style.display = "block";
        }else{
            x.style.display = "none"
        }
    }

    </script>
    
    {{-- {!! Form::submit('Print',['class'=>'btn', 'class' => 'pull-right'])!!}
    {!! Form::close()!!} --}}
    
    @endcan
@endsection


        
