@extends('layouts.app')

@section('content')



{!! Form::open(['action' => 'MakeBuysController@calc', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
{{-- <div class="form-group">
        {{Form::label('Bprice', 'Price')}}
        {{Form::number('Bprice', '', ['class' => 'form-control', 'placeholder' => 'Enter the Price'])}}
    </div>

<div class="form-group">
        {{Form::label('Lamount', 'Lease Amount/day')}}
         {{Form::number('Lamount', '', ['class' => 'form-control', 'placeholder' => 'Enter the Lease Amount'])}}
        </div> --}}

        {{-- <script>
        var num1 = 5000;
        var num2 = 50;
        </script> --}}
        
 <button onclick="doClick()" >Submit </button> 
 <script>
        function doCLick(){
                alert('Yooo');
        }
</script>



        {{-- {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} --}}
   
        {!! Form::close() !!}


        @endsection