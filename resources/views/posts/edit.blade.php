@extends('layouts.app')

@section('content')
    <h2>Edit Request</h2>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('StockName', 'Stock Name')}}
            {{Form::text('StockName', $post->StockName, ['class' => 'form-control', 'placeholder' => 'Enter the stock Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('StockNumber', 'Stock Number')}}
                {{Form::text('StockNumber', $post->StockNumber, ['class' => 'form-control', 'placeholder' => 'Enter the stock Number'])}}
            </div>
        
         <div class="form-group">
        {{Form::label('Quantity', 'Quantity')}}
        {{Form::text('Quantity', $post->Quantity, ['class' => 'form-control', 'placeholder' => 'Enter the Quantity'])}}
             </div>

             <div class="form-group">
                    {{Form::label('Department', 'Department')}}
                    {{Form::text('Department', $post->Department, ['class' => 'form-control', 'placeholder' => 'Department Name'])}}
                         </div>

             <div class="form-group">
                    {{Form::label('PriceInfo', 'Price Info')}}
                    {{Form::text('PriceInfo', $post->PriceInfo, ['class' => 'form-control', 'placeholder' => 'Enter Price'])}}
                </div>

            <div class="form-group">
            {{Form::label('Discount', 'Discount')}}
            {{Form::text('Discount', $post->Discount, ['class' => 'form-control', 'placeholder' => 'Discount'])}}
        </div>

        <div class="form-group">
                {{Form::label('TAX', 'TAX')}}
                {{Form::text('TAX', $post->TAX, ['class' => 'form-control', 'placeholder' => 'Tax Info'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   
    {!! Form::close() !!}
   
@endsection