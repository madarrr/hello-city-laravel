@extends('base')
@section('title')
About Us | {{config('app.name')}}
@endsection
@section('content')
       <p> by THXG STONE</p>
       <p> <a href="{{ route('home') }}">Revenir a la page d'acceuil </a></p>
       <img src="img/img1.png" alt="image bart simpson">
@endsection