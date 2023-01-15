@extends('layouts.home')

@section('content')
  <h2>Inserimento Nuovo</h2>
  <form action="{{route('fumetti.store')}}" method="POST">
    @csrf
    <div class="container">
      <div class="mb-3">
        <label for="title" class="form-label">NOME ARTICOLO</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserire titolo">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Url img</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserire percorso immagine">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Inserire prezzo">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Albo</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserire albo della storia">
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserire data di uscita">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Inserire la tipologia dell'articolo">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Textarea</label>
        <textarea class="form-control" id="desctiption" name="description" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-secondary">Conferma</button>
    </div>
    
  </form>
@endsection