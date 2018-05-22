@extends('layouts.app')

@section('content')

    <h2>Requisitions</h2>

    {!! Form::open(['action' => ['RequisitionsController@update', $requisition->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', $requisition->description, ['class' => 'form-control', 'placeholder' => 'Enter the Name'])}}
        </div>

        <div class="form-group">
                {{Form::label('quantity', 'Quantity')}}
                {{Form::text('quantity',  $requisition->quantity, ['class' => 'form-control', 'placeholder' => 'Enter the Adress'])}}
            </div>

            <div class="form-group">
                    {{Form::label('department', 'Manager Approval')}}
                    <select name ="department">
                           <option value="Stores" >Stores</option>
                           <option value ="Procurement" >Procurement</option>
                            <option value ="ICT" >ICT</option>
                            <option value="Engineering" >Engineering</option>
                            <option value="Accounts" >Accounts</option>
                            <option value ="Production" >Production</option>
                            
                            
                    </select>
            </div>
                    {{-- <div class="form-group">
                                   {{Form::label('user_id', 'Department Manager')}}
                                   <select name ="user_id">
                                          <option value="2" >Stores</option>
                                           <option value ="1" >ICT</option>
                                           <option value="4" >Engineering</option>
                                           <option value="3" >Procurement</option>
                                           <option value="5" >Accounts</option>
                                           <option value="6" >Production</option>
                                           
                                           
                                   </select> --}}
   
                   {{-- {{Form::text('department', '', ['class' => 'form-control', 'placeholder' => 'Enter the Department'])}} --}}
                    {{-- </div> --}}

         

     
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   
            {!! Form::close() !!}
           
        @endsection