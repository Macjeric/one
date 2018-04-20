@extends('layouts.app')

@section('content')
    <h2>Edit Users</h2>
<a href="/Admin" class="btn btn-default">Back</a><br></br>
    

    {!! Form::open(['action' => ['AdminsController@update', $admin->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('id', 'Id')}}
        {{Form::text('id', $admin->id, ['class' => 'form-control', 'placeholder' => 'Enter the ID'])}}
    </div>
    <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $admin->name, ['class' => 'form-control', 'placeholder' => 'Enter the  Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('department', 'Department')}}
                {{Form::text('department', $admin->department, ['class' => 'form-control', 'placeholder' => 'Enter the Department'])}}
            </div>
        
         <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', $admin->email, ['class' => 'form-control', 'placeholder' => 'Enter the Quantity'])}}
             </div>

             {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
             {!! Form::close() !!}


             {!!Form::open(['action' => ['AdminsController@destroy', $admin->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

   
             {!! Form::close() !!}
            
         @endsection