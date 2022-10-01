@extends('base')
@section('title')
About Us | {{config('app.name')}}
@endsection
@section('content')
       <img src="{{  asset('/img/img1.png') }}" alt="image bart simpson" class='text-indigo=500 my-12 rounded-full hover:text-indigo-600 underline'>
       <h2 class='text-gray-500 mb-5'>  <a href="{{ route('home') }}" class='text-indigo=500 hover:text-indigo-600 underline' >Revenir a la page d'acceuil </a></h2>
       <p> Build with <span class='text-pink-500'>  &hearts; </span> by THXG STONE</p>
     
@endsection