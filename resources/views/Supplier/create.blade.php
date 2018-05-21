@extends('layouts.app')

@section('content')
@can('print_prequest')
    <h2>Purchases Request</h2>

    {!! Form::open(['action' => 'SupplierController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('supplier_name', 'Supplier Name')}}
            {{Form::text('supplier_name', '', ['class' => 'form-control', 'placeholder' => 'Enter the Supplier Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('supplier_address', 'Supplier Address')}}
                {{Form::text('supplier_address', '', ['class' => 'form-control', 'placeholder' => 'Enter the Supplier Number'])}}
            </div>
        
         <div class="form-group">
        {{Form::label('supplier_contact', 'Contacts')}}
        {{Form::text('supplier_contact', '', ['class' => 'form-control', 'placeholder' => 'Enter the Supplier Contact'])}}
             </div>

             <div class="form-group">
                    {{Form::label('supplier_goods', 'Supplier Offer')}}
                    {{Form::text('supplier_goods', '', ['class' => 'form-control', 'placeholder' => 'Supplier Offer'])}}
                         </div>

             <div class="form-group">
                    {{Form::label('supplier_discounts', 'Supplier Discounts')}}
                    {{Form::text('supplier_discounts', '', ['class' => 'form-control', 'placeholder' => 'Supplier Discounts'])}}
                </div>

           
            
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   
    {!! Form::close() !!}
   @endcan
   
@endsection