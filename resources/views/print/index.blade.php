@extends('layouts.app')

@section('content')

@can('print_prequest')
<div style="text-align:center">
<h2> ONE COMPANY LIMITED </h2>
<h3> Purchases Request</h3>
</div>
{{-- {!!Form::open(['action' => ['PrintpageController@display'], 'method' => 'GET'])!!} --}}
    <table class="table">
        <tr>
            <th> Stock Number</th>
            <th>Stock Name</th>
            <th>Quantity</th>
            <th>Tax Code</th>
            <th>Department</th>
            <th>Posted on</th>            
            <th>By</th>
            
        </tr>
        @foreach($data as $post)
        <tr>
        <td>{!!$post-> StockNumber!!}</td>
        <td>{!!$post-> StockName!!}</td>
        <td>{!!$post-> Quantity!!}</td>
        <td>{!!$post-> TAX!!}</td>
        <td>{!!$post-> Department!!}</td>
        <td>{!!$post-> created_at!!}</td>        
        <td>{!!$post-> user->name!!}</td>
        
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


        
