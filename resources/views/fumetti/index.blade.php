@extends('layouts.home')

@section('content')
  <h1>Tutti i fumetti</h1> 
  
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Dettagli</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($fumetti as $fumetto)
      
        <tr>
          <th>{{$fumetto->slug}}</th>
          <th>{{$fumetto->title}}</th>
          <th>{{$fumetto->price}}</th>
          <th>{{$fumetto->type}}</th>
          <th></th>
          
        </tr>
      @empty
        
      @endforelse
    </tbody>
  </table>
@endsection