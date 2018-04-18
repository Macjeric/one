@extends('layouts.app')

@section('content')
@can('print_prequest')
    <h2>Create Purchase Order</h2>

    {!! Form::open(['action' => 'OrdersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('item_no', 'Item No')}}
            {{Form::text('item_no', '', ['class' => 'form-control', 'placeholder' => 'Enter the Item no'])}}
        </div>
        
        <div class="form-group">
                {{Form::label('description', 'Item Name')}}
                {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Enter the description'])}}
            </div>

        <div class="form-group">
                {{Form::label('department', 'Department')}}
                 {{Form::text('department', '', ['class' => 'form-control', 'placeholder' => 'Enter the department'])}}
                </div>

         <div class="form-group">
                 {{Form::label('quantity', 'Quantity')}}
                {{Form::text('quantity', '', ['class' => 'form-control', 'placeholder' => 'Enter the Quantity'])}}
                 </div>

     <div class="form-group">
             {{Form::label('uom', 'Units of Measure')}}
             {{Form::text('uom', '', ['class' => 'form-control', 'placeholder' => 'Enter the UOM'])}}
                </div>

     <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Enter the Price'])}}
            </div>

    <div class="form-group">
             {{Form::label('total', 'Total Price')}}
             {{Form::text('price_each', '', ['class' => 'form-control', 'placeholder' => 'Price'])}}
            </div>
            <div class="form-group">
                {{Form::file('proforma')}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   
            {!! Form::close() !!}
           
           @endcan
        @endsection