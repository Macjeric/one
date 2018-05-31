@extends('layouts.app')

@section('content')

<h2>Supplier's Performance</h2>

@foreach($supplier as $supply)

<div id="myDiv"><!-- Plotly chart will be drawn inside this DIV --></div>
  <script>
   var data = [{
  x: ['Discounts(%)', 'Time(/10)', 'Guarantee(months)', 'Quality(/10)'],
  y: [ {{$supply->supplier_discounts}} , {{$supply->delivery_time}}, {{$supply->goods_guarantee}}, {{$supply->g_quality}}],
  type: 'bar'
}];
var layout = {
  title: 'Number of Graphs Made this Week',
}
Plotly.newPlot('myDiv', data);
  </script>
@endforeach
        @endsection