@extends('layouts.app')

@section('content')
{{-- @can('enter_stocks')
@can('purchase_request') --}}
    <h2>Create Order</h2>

    {!! Form::open(['action' => 'OrdernotifyController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    

        <div class="form-group">
                {{Form::label('item', 'Item Name')}}
                 {{Form::text('item', '', ['class' => 'form-control', 'placeholder' => 'Enter the Item'])}}
                </div>

                <div class="form-group">
                        {{Form::label('quantity', 'Quantity')}}
                         {{Form::text('quantity', '', ['class' => 'form-control', 'placeholder' => 'Quantity'])}}
                        </div>

         <div class="form-group">
                 {{Form::label('department', 'Department Name')}}
                 <select name ="department">
                        <option value="Stores" >Stores</option>
                         <option value ="ICT" >ICT</option>
                        <option value ="Procurement" >Procurement</option>                         
                         <option value="Engineering" >Engineering</option>
                         <option value="Accounts" >Accounts</option>
                         <option value ="Production" >Production</option>
                         
                         
                 </select>
         </div>
                 {{-- <div class="form-group">
                                {{Form::label('user_id', 'Department Manager')}}
                                <select name ="user_id">
                                        <option value ="1" >ICT</option>
                                       <option value="2" >Stores</option>
                                       <option value="4" >Engineering</option>
                                        <option value="3" >Procurement</option>
                                        <option value="5" >Accounts</option>
                                        <option value="6" >Production</option>
                                    
                                        
                                </select> --}}

                {{-- {{Form::text('department', '', ['class' => 'form-control', 'placeholder' => 'Enter the Department'])}} --}}
                 {{-- </div> --}}

    


            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   
            {!! Form::close() !!}
           {{-- @endcan
           @endcan --}}
        @endsection