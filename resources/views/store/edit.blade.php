@extends('layouts.app')

@section('content')
@can('enter_stocks')
@can('purchase_request')
    <h2>Goods Received</h2>

    {!! Form::open(['action' => ['MainStoreController@update', $main->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('supplier_name', 'Supplier Name')}}
            {{Form::text('supplier_name', $main->supplier_name, ['class' => 'form-control', 'placeholder' => 'Enter the Name'])}}
        </div>

        <div class="form-group">
                {{Form::label('supplier_address', 'Supplier Address')}}
                {{Form::text('supplier_address',  $main->supplier_address, ['class' => 'form-control', 'placeholder' => 'Enter the Adress'])}}
            </div>

        <div class="form-group">
                {{Form::label('item', 'Item Name')}}
                 {{Form::text('item', $main->item, ['class' => 'form-control', 'placeholder' => 'Enter the Item'])}}
                </div>

         <div class="form-group">
                 {{Form::label('department', 'Department Name')}}
                {{Form::text('department', $main->department, ['class' => 'form-control', 'placeholder' => 'Enter the Department'])}}
                 </div>

     <div class="form-group">
             {{Form::label('maind', 'maind At')}}
             {{Form::text('maind', $main->maind, ['class' => 'form-control', 'placeholder' => 'Enter the Place'])}}
                </div>

     <div class="form-group">
            {{Form::label('quantity', 'Quantity')}}
            {{Form::text('quantity', $main->quantity, ['class' => 'form-control', 'placeholder' => 'Enter the Adress'])}}
            </div>

    <div class="form-group">
             {{Form::label('price_each', 'Price  Each')}}
             {{Form::text('price_each', $main->price_each, ['class' => 'form-control', 'placeholder' => 'Price'])}}
            </div>

    <div class="form-group">
            {{Form::label('total', 'Total Price ')}}
            {{Form::text('total', $main->total, ['class' => 'form-control', 'placeholder' => 'Total Amount'])}}
            </div>

            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   
            {!! Form::close() !!}
           @endcan
           @endcan
        @endsection