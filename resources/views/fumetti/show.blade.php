@extends('layouts.home')

@section('content')
  <h1>{{$fumetto->title}}</h1>
  <h6>{{$fumetto->series}}</h6> 
  <h6>{{$fumetto->sale_date}}</h6> 
  <h6>{{$fumetto->price}}</h6> 
  
  <div class="text-center">
    <img src="{{$fumetto->thumb}}" alt="#">
    <p>{!!$fumetto->description!!}</p>
  </div>
@endsection