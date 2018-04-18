@extends('layouts.app')

@section('content')
@can('enter_stocks')
@can('purchase_request')
    <h2>Goods Received</h2>

    {!! Form::open(['action' => ['ReceivesController@update', $receive->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('supplier_name', 'Supplier Name')}}
            {{Form::text('supplier_name', $receive->supplier_name, ['class' => 'form-control', 'placeholder' => 'Enter the Name'])}}
        </div>

        <div class="form-group">
                {{Form::label('supplier_address', 'Supplier Address')}}
                {{Form::text('supplier_address',  $receive->supplier_address, ['class' => 'form-control', 'placeholder' => 'Enter the Adress'])}}
            </div>

        <div class="form-group">
                {{Form::label('item', 'Item Name')}}
                 {{Form::text('item', $receive->item, ['class' => 'form-control', 'placeholder' => 'Enter the Item'])}}
                </div>

         <div class="form-group">
                 {{Form::label('department', 'Department Name')}}
                {{Form::text('department', $receive->department, ['class' => 'form-control', 'placeholder' => 'Enter the Department'])}}
                 </div>

     <div class="form-group">
             {{Form::label('received', 'Received At')}}
             {{Form::text('received', $receive->received, ['class' => 'form-control', 'placeholder' => 'Enter the Place'])}}
                </div>

     <div class="form-group">
            {{Form::label('quantity', 'Quantity')}}
            {{Form::text('quantity', $receive->quantity, ['class' => 'form-control', 'placeholder' => 'Enter the Adress'])}}
            </div>

    <div class="form-group">
             {{Form::label('price_each', 'Price  Each')}}
             {{Form::text('price_each', $receive->price_each, ['class' => 'form-control', 'placeholder' => 'Price'])}}
            </div>

    <div class="form-group">
            {{Form::label('total', 'Total Price ')}}
            {{Form::text('total', $receive->total, ['class' => 'form-control', 'placeholder' => 'Total Amount'])}}
            </div>

            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   
            {!! Form::close() !!}
           @endcan
           @endcan
        @endsection