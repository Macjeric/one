@extends('layouts.app')

@section('content')
@can('print_prequest')
    <h2>Add Supplier Details</h2>

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

                 <div class="form-group">   
                                {{Form::label('delivery_time', 'Rate Out of 10 the speed of good delivery')}}
                                <select name ="delivery_time">
                                       <option value="1" >1</option>
                                        <option value ="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" >4</option>
                                        <option value="5" >5</option>
                                        <option value="6" >6</option>
                                        <option value="7" >7</option>
                                        <option value="8" >8</option>
                                        <option value="9" >9</option>
                                        <option value="10" >10</option>
                                    </select>
                                </div>
                                        
                                <div class="form-group">   
                                    {{Form::label('g_quality', 'Rate goods Quality Out of 10  ')}}
                                    <select name ="g_quality">
                                           <option value="1" >1</option>
                                            <option value ="2" >2</option>
                                            <option value="3" >3</option>
                                            <option value="4" >4</option>
                                            <option value="5" >5</option>
                                            <option value="6" >6</option>
                                            <option value="7" >7</option>
                                            <option value="8" >8</option>
                                            <option value="9" >9</option>
                                            <option value="10" >10</option>
                                        </select>
                                    </div>
                
                                <div class="form-group">   
                                        {{Form::label('goods_guarantee', 'Guarantee Period (Months)')}}
                                        <select name ="goods_guarantee">
                                               <option value="1" >1</option>
                                                <option value ="2" >2</option>
                                                <option value="3" >3</option>
                                                <option value="4" >4</option>
                                                <option value="5" >5</option>
                                                <option value="6" >6</option>
                                                <option value="7" >7</option>
                                                <option value="6" >6</option>
                                                <option value="8" >8</option>
                                                <option value="9" >9</option>
                                                <option value="10" >10</option>
                                                <option value="11" >11</option>
                                                <option value="12" >12</option>
                                                <option value="13" >More than a Year</option>
                                                
                                                
                                                
                                            </select>
                                        </div>
           
            
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   
    {!! Form::close() !!}
   @endcan
   
@endsection