@extends('layouts.app')

@section('content')
@can('enter_stocks')
@can('purchase_request')
    <h2>Purchases Request</h2>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('StockName', 'Stock Name')}}
            {{Form::text('StockName', '', ['class' => 'form-control', 'placeholder' => 'Enter the stock Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('StockNumber', 'Stock Number')}}
                {{Form::text('StockNumber', '', ['class' => 'form-control', 'placeholder' => 'Enter the stock Number'])}}
            </div>
        
         <div class="form-group">
        {{Form::label('Quantity', 'Quantity')}}
        {{Form::text('Quantity', '', ['class' => 'form-control', 'placeholder' => 'Enter the Quantity'])}}
             </div>

             <div class="form-group">
                    {{Form::label('Department', 'Department')}}
                    {{Form::text('Department', '', ['class' => 'form-control', 'placeholder' => 'Department Name'])}}
                         </div>

             <div class="form-group">
                    {{Form::label('PriceInfo', 'Price Info')}}
                    {{Form::text('PriceInfo', '', ['class' => 'form-control', 'placeholder' => 'Enter Price'])}}
                </div>

            <div class="form-group">
            {{Form::label('Discount', 'Discount')}}
            {{Form::text('Discount', '', ['class' => 'form-control', 'placeholder' => 'Discount'])}}
        </div>

        <div class="form-group">
                {{Form::label('TAX', 'TAX')}}
                {{Form::text('TAX', '', ['class' => 'form-control', 'placeholder' => 'Tax Info'])}}
            </div>
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   
    {!! Form::close() !!}
   @endcan
   @endcan
@endsection