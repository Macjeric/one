@extends('layouts.app')

@section('content')
@can('user_admin')

<a href="/register" class="btn btn-default">Create User</a>
<h1>Admins Page</h1>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Department</th>
        <th>Email</th>
        <th>Edit</th>
        
    </tr>
    @foreach($admins as $admin)
    <tr>
    <td>{!!$admin-> id!!}</td>
    <td>{!!$admin-> name!!}</td>
    <td>{!!$admin-> department!!}</td>
    <td>{!!$admin-> email!!}</td>
    <td><a href="/Admin/{{$admin->id}}/edit">Edit</a></td>

    </tr>
    @endforeach
</table>


@endcan        
@endsection