@extends('layouts.base')
@section('content')
<img src="{{asset ('/img/img1.png') }}" alt="image bart simpson logo" class='mt-12 rounded-full shadow-md h=12'>
       <h1 class='mt-5  text-3xl sm:text-5xl font-semibold text-indigo-600'>Hello from Ivory coast !</h1>
       <p class='text-lg text-gray-800'> it's currently {{date('h:i A') }}.</p>

@endsection 
