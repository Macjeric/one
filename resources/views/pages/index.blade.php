@extends('layouts.app')
{{-- <div class ="bgimg"> --}}
    
@section('content')
@if(Auth::guest())
<div class="jumbotron text-center">
        <h1>Welcome To Procurement</h1>
        <p>Acquire Item from the Store </p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> </p>
    </div>
       @endif

       
{{-- </div> --}}
       {{-- <img src ="imgs/arrows-box-business.jpg" width="1210" height="550"> --}}
       {{-- {{ HTML::image('imgs/arrows-box-business.jpg') }} --}}
       {{-- {{ asset('imgs/arrows-box-business.jpg') }} --}}
 @endsection
  