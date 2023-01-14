@extends('layouts.home')

@section('content')
  <h1>{{$fumetto->title}}</h1>
  <span>{{$fumetto->series}}</span> 
  <span>{{$fumetto->sale_date}}</span> 
  <span>{{$fumetto->price}}</span> 
  
  <div class="text-center">
    <img src="{{$fumetto->thumb}}" alt="#">
  </div>
  <p>{!!$fumetto->desctiption!!}</p>
@endsection