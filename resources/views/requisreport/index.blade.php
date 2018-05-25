@extends('layouts.app')

@section('content')

@can('print_prequest')
<h3> ONE COMPANY LIMITED </h3>
<h1> Purchase Request</h1>

{{-- {!!Form::open(['action' => ['PrintpageController@display'], 'method' => 'GET'])!!} --}}
    <table class="table">
        <tr>
            <th> Description</th>
            <th>Quantity</th>
            <th>Department</th>
            <th>Written At</th>
            <th>Changed At</th>
    
        </tr>
        @foreach($data as $requis)
        <tr>
        <td>{!!$requis-> description!!}</td>
        <td>{!!$requis-> quantity!!}</td>
        <td>{!!$requis-> department!!}</td>        
        <td>{!!$requis-> created_at!!}</td>
        <td>{!!$requis-> updated_at!!}</td>
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


        
