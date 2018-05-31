@extends('layouts.app')

@section('content')


<div id="myDiv"><!-- Plotly chart will be drawn inside this DIV --></div>
  <script>
   var data = [{
  x: ['Discounts', 'orangutans', 'monkeys'],
  y: [20, 14, 23],
  type: 'bar'
}];

Plotly.newPlot('myDiv', data);
  </script>

        @endsection