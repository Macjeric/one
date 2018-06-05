@extends('layouts.app')

@section('content')


<?php
echo hash('sha256', 'Goodfellow');
?>

        {{-- <div id="myDiv"><!-- Plotly chart will be drawn inside this DIV --></div> --}}
        {{-- <script>
         var data = [{
        x: ['Discounts(%)', 'Quality(/10)'],
        y: [ {{var1}} , {{var2}}],
        type: 'bar'
      }];
      var layout = {
        title: 'Number of Graphs Made this Week',
      }
      Plotly.newPlot('myDiv', data);
        </script> --}}


        {{-- {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   
        {!! Form::close() !!} --}}


        @endsection