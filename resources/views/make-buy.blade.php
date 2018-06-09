@extends('layouts.app')

@section('content')

<h3>Make-or-Buy Decision</h3>
<p>For example, suppose that a project requires a piece of equipment
that has a purchase price of $12,000 and daily operating costs of $400. Suppose that you
could lease the same piece of equipment for $800 per day, including the operating costs.
You can set up an equation so that you can see when the purchase cost equals the lease
cost and determine when it makes sense financially to lease or buy the equipment. In this
example, d is the number of days you need the piece of equipment. The equation would be:
<br>
<div style="text-align:center">
$800/day = $12,000 + $400/day <br>
Subtracting $400/day from both sides, you get:<br>
$400/day = $12,000<br>
Dividing both sides by $400, you get:<br>
d = 30
</div>
In other words, the purchase cost would equal the lease cost in 30 days. So, if you
need the equipment for less than 30 days, leasing would be more economical. If you need
the equipment for more than 30 days, you should purchase it. In general, leasing is
often cheaper for meeting short-term needs, but more expensive for long-term needs
</p><br></br>

<script>
            
  function calc()
  {
      var n1 = parseFloat(document.getElementById('n1').value);
      var n2 = parseFloat(document.getElementById('n2').value);
      
      var oper = document.getElementById('operators').value;
      
      if(oper === '/')
      {
          document.getElementById('result').value = n1/n2;
      }
    
  }
  
</script>

</head>
<body>

<label>Buying Price:</label> <input type="text" id="n1"/><br/><br/>
<label>Lease Amount:</label> <input type="text" id="n2"/><br/><br/>

<select id="operators">
  
  <option value="/">/</option>
</select>

<button onclick="calc();">=</button>
<input type="text" id="result"/ placeholder="day(s)"><br>
<b><p>The purchase cost would equal the lease cost in shown days </p></b>  

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