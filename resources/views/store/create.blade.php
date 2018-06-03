@extends('layouts.app')

@section('content')
@can('enter_stocks')
@can('purchase_request')
    <h2>Goods Received Main Store</h2>

    {!! Form::open(['action' => 'MainStoreController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('supplier_name', 'Supplier Name')}}
            {{Form::text('supplier_name', '', ['class' => 'form-control', 'placeholder' => 'Enter the Name'])}}
        </div>

        <div class="form-group">
                {{Form::label('supplier_address', 'Supplier Address')}}
                {{Form::text('supplier_address', '', ['class' => 'form-control', 'placeholder' => 'Enter the Adress'])}}
            </div>

        <div class="form-group">
                {{Form::label('item', 'Item Name')}}
                 {{Form::text('item', '', ['class' => 'form-control', 'placeholder' => 'Enter the Item'])}}
                </div>

         <div class="form-group">
                 {{Form::label('department', 'Department Name')}}
                 <select name ="department">
                        <option value="Stores" >Stores</option>
                        <option value ="Procurement" >Procurement</option>
                         <option value ="ICT" >ICT</option>
                         <option value="Engineering" >Engineering</option>
                         <option value="Accounts" >Accounts</option>
                         <option value ="Production" >Production</option>
                         <option value ="Marketing" >Marketing</option>
                         
                         
                         
                 </select>
         </div>
                 <div class="form-group">
                                {{Form::label('user_id', 'Department Manager')}}
                                <select name ="user_id">
                                       <option value="2" >Stores</option>
                                        <option value ="1" >ICT</option>
                                        <option value="4" >Engineering</option>
                                        <option value="3" >Procurement</option>
                                        <option value="5" >Accounts</option>
                                        <option value="6" >Production</option>
                                        <option value="7" >Markerting</option>
                                        
                                        
                                        
                                </select>

                {{-- {{Form::text('department', '', ['class' => 'form-control', 'placeholder' => 'Enter the Department'])}} --}}
                 </div>

     <div class="form-group">
             {{Form::label('received', 'Received At')}}
             {{Form::text('received', '', ['class' => 'form-control', 'placeholder' => 'Enter the Place'])}}
                </div>

     <div class="form-group">
            {{Form::label('quantity', 'Quantity')}}
            {{Form::text('quantity', '', ['class' => 'form-control', 'placeholder' => 'Enter the Adress'])}}
            </div>

    <div class="form-group">
             {{Form::label('price_each', 'Price  Each')}}
             {{Form::text('price_each', '', ['class' => 'form-control', 'placeholder' => 'Price'])}}
            </div>

    <div class="form-group">
            {{Form::label('total', 'Total Price ')}}
            {{Form::text('total', '', ['class' => 'form-control', 'placeholder' => 'Total Amount'])}}
            </div>


            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   
            {!! Form::close() !!}
           @endcan
           @endcan
        @endsection