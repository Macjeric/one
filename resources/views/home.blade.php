@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                {{-- <div class="pull-right">  </div> --}}

                                
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
 
                   {{-- <p> You are logged in!</p> --}}
                   {{-- <p> LoggedIn as {{ Auth::user()->name }}</p> --}}

                   @can('user_admin')

                   <a href="/Admin" class="btn btn-default">Panel</a>@endcan

                   @can('enter_stocks')
                   <ul>
                   <li><a href="/receive/create"> Enter Stock for User</a><br></li>
                   <li><a href="/receive"> Check the Stocks</a><br></li>
                   <li><a href="/ordernotify"> Check Orders</a></li>
                   <li><a href="/posts/create"> Create Purchase Request</a></li>
                   <li><a href="/requisition">Requisitions</a></li>
                   <li><a href="/store">All Stocks</a></li>
                   <li><a href="/store/create"> Enter Stock Main Store</a><br></li>
                   
                   
                   
                   </ul>
                   @endcan
                   
                   @can('print_prequest')
                   <ul>
                   <li><a href="/posts">Check Requests</a></li>
                   <li><a href="/orders/">PurchasesOrders Created</a></li>
                   <li><a href="/orders/create">Create new Order</a></li>
                   <li><a href="/Supplier">Suppliers list</a></li>
                   <li><a href="/make-buy">Lease/Buy</a></li>
                   
                   
                   
                   </ul>
                   @endcan


                   
                    @if(count($receives)>0)
                   <table class="table table-stripped">
                    <tr>
                        <th>Available Stocks     |   <a href="/report/{{Auth::user()->id}}">Requisitions</a> </th>
                        <th><a href="/requisition/create">Not Available in Store?</a> 
                        {{-- <th></th> --}}
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
