@extends('layouts.app')

@section('content')
@if(Auth::guest())
<div class="jumbotron text-center">
        <h1>Welcome To Procurement</h1>
        <p>Acquire Item from the Store </p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> </p>
    </div>
       @endif
       {{-- {{ HTML::image('imgs/arrows-box-business.jpg') }} --}}
       {{-- {{ asset('arrows-box-business.jpg') }} --}}
 @endsection
  