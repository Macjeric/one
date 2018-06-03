@extends('layouts.app')

@section('content')
<a href="/Supplier" class="btn btn-default">Go Back</a>
<h1>{{$supply->supplier_name}}</h1>

<div>
    <p> Supplier Name:  {!!$supply-> supplier_name!!} </p>
    <p> Suppiler Address:  {!!$supply-> supplier_address!!} </p>
    <p> Suppiler Contact:  {!!$supply-> supplier_contact!!} </p>
    <p> Suppiler Address:  {!!$supply-> supplier_address!!} </p>
    <p> Suppiler Goods:  {!!$supply-> supplier_goods!!} </p>
    <p> Suppiler Discounts(%):  {!!$supply-> supplier_discounts!!} </p>

    
    

</div>
<hr>
{{-- <small>Written on {{$receive->created_at ->toDayDateTimeString() }} by {{$receive->user->name}} </small>  --}}
{{-- <a href="/Supplier/{{$supply->id}}/performance" class="btn btn-primary">Supplier Performances</a> --}}
<h3>Supplier's Performance</h3>
<div id="myDiv"><!-- Plotly chart will be drawn inside this DIV --></div>
  <script>
   var data = [{
  x: ['Discounts(%)', 'Time(/10)', 'Guarantee(months)', 'Quality(/10)'],
  y: [ {{$supply->supplier_discounts}} , {{$supply->delivery_time}}, {{$supply->goods_guarantee}}, {{$supply->g_quality}}],
  type: 'bar'
}];
var layout = {

}
Plotly.newPlot('myDiv', data);
  </script>


<hr>
<a href="/Supplier/{{$supply->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['SupplierController@destroy', $supply->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}

@endsection