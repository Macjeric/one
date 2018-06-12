@extends('layouts.app')

@section('content')

@can('enter_stocks')
<div style="text-align:center">
<h2> ONE COMPANY LIMITED </h2>
<h3> Orders Made</h3>
</div>

{!!Form::open(['action' => ['OrdermonthController@ordernotify'], 'method' => 'GET'])!!}
    <table class="table">
        <tr>
            <th> Item</th>
            <th>Quantity</th>
            <th>Department</th>
            <th>Written At</th>
            <th>Changed At</th>
            <th>Ordered By </th>
            <th>{{Form::label('months', 'Month:')}}
                    <select name ="month">
                            <option value ="1" >1</option>
                           <option value="2" >2</option>
                           <option value="3" >3</option>                            
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                            <option value="6" >6</option>
                            <option value="7" >7</option>
                            <option value="8" >8</option>
                            <option value="9" >9</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option> 
                    </select></th>
            <th>{!! Form::submit('Next')!!} </th>
            
            
    
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

    {{-- <button id="printbutton" onClick =" myfunction(); window.print();">Print</button>
    <script>
        function myfunction(){
            var x = document.getElementById("printbutton");
            if(x.style.display === "none"){
                x.style.display = "block";
            }else{
                x.style.display = "none"
            }
        }
    
        </script> --}}
    
    {{-- {!! Form::submit('Print',['class'=>'btn', 'class' => 'pull-right'])!!}
    {!! Form::close()!!} --}}
    @endcan
@endsection


        
