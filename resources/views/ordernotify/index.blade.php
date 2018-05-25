@extends('layouts.app')

@section('content')

@can('enter_stocks')
<h3> ONE COMPANY LIMITED </h3>
<h1> Orders Made</h1>

{{-- {!!Form::open(['action' => ['PrintpageController@display'], 'method' => 'GET'])!!} --}}
    <table class="table">
        <tr>
            <th> Item</th>
            <th>Quantity</th>
            <th>Department</th>
            <th>Written At</th>
            <th>Changed At</th>
            <th>Approved By </th>
            
    
        </tr>
        @foreach($notifies as $notify)
        <tr>
        <td>{!!$notify-> item!!}</td>
        <td>{!!$notify-> quantity!!}</td>
        <td>{!!$notify-> department!!}</td>        
        <td>{!!$notify-> created_at->toDayDateTimeString()!!}</td>
        <td>{!!$notify-> updated_at->toDayDateTimeString()!!}</td>
        <td>{!!$notify-> user->name!!}</td>
        
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


        
