@extends('base')
@section('title')
{{config('app.name')}}
@endsection
@section('content')
       <h1>Hello from ivory coast !</h1>
       <p> it's currently {{date('h:i A') }}.</p>

@endsection 
