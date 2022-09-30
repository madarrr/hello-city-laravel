@extends('base')
@section('title')
{{config('app.name')}}
@endsection
@section('content')
<img src="{{asset ('/img/img1.png') }}" alt="image bart simpson logo">
       <h1>Hello from ivory coast !</h1>
       <p> it's currently {{date('h:i A') }}.</p>

@endsection 
