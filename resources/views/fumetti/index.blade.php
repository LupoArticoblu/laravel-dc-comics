@extends('layouts.home')

@section('content')
  <h1>Tutti i fumetti</h1> 

  @if (session('deleted'))
  
  <div>
    <div class="alert alet-success" role="alert">
      {{session('deleted')}}
    </div>
  </div>
  @endif
  
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
          <th>{{$fumetto->id}}</th>
          <th>{{$fumetto->title}}</th>
          <th>{{$fumetto->price}}</th>
          <th>{{$fumetto->type}}</th>
          <th><a href="{{route('fumetti.show', $fumetto)}}" class="btn btn-danger">SHOW</a>
          <th><a href="{{route('fumetti.edit', $fumetto)}}" class="btn btn-warning">MODIFICA</a> 
          <th>
            <form onsubmit="return confirm('eliminare {{$fumetto->title}}?')" class='d-inline' action="{{route('fumetti.destroy', $fumetto)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-secondary" title="delete">ELIMINA</button>
            </form>
          </th>
          
        </tr>
      @empty
        
      @endforelse
    </tbody>
  </table>
@endsection