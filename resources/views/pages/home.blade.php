@extends('base')
@section('title')
Hello city
@endsection
@section('content')
       <h1>Hello from ivory coast !</h1>
       <p> it's currently {{date('h:i A') }}.</p>

@endsection 
