@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
 
                   {{-- <p> You are logged in!</p> --}}
                   {{-- <p> LoggedIn as {{ Auth::user()->name }}</p> --}}

                   @can('enter_stocks')
                   <a href="/receive/create"> Enter Stock</a><br>
                   <a href="/receive"> Check the Stocks</a><br>
                   <a href="/ordernotify"> Check Orders</a>
                

                   @endcan
                   
                   
                    @if(count($receives)>0)
                   <table class="table table-stripped">
                    <tr>
                        <th>Available Stocks </th>
                        <th></th>
                        <th></th>
                    </tr>

                    
                   @foreach($receives as $receive)
                   

                   <tr>
                       <td>{{$receive->item}}</td>
                       <td><a href="/ordernotify/create" class="btn btn-default">Order</a></td>
                       <td></td>
                   </tr>
                   @endforeach
                </table>
                @endif
                       

                    


               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
