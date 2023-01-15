@extends('layouts.home')

@section('content')
  <h2>Inserimento Nuovo
    <th><a href="{{route('fumetti.edit', $fumetto)}}" class="btn btn-warning">MODIFICA</a>
  </h2>

  @if ($errors->any()){
    <div class="alert alert-danger">
      <ul>

        @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach
      </ul>
    </div>
  }
    
  @endif
  <form action="{{route('fumetti.store')}}" method="POST">
    @csrf
    <div class="container">
      <div class="mb-3">
        <label for="title" class="form-label">NOME ARTICOLO</label>
        <input value="{{old('title')}}" type="text" class="form-control @error('title')
          is-invalid
        @enderror" id="title" name="title" placeholder="Inserire titolo">
        <div class="invalid-feedback">
          {{$message}}
        </div>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Url img</label>
        <input type="text" class="form-control @error('title')
        is-invalid
        @enderror" id="image" name="image" placeholder="Inserire percorso immagine">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input value="{{old('price')}}" type="text" class="form-control @error('title')
        is-invalid
        @enderror" id="price" name="price" placeholder="Inserire prezzo">
        <div class="invalid-feedback">
          {{$message}}
        </div>
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Albo</label>
        <input value="{{old('series')}}" type="text" class="form-control @error('title')
        is-invalid
        @enderror" id="series" name="series" placeholder="Inserire albo della storia">
        <div class="invalid-feedback">
          {{$message}}
        </div>
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data</label>
        <input value="{{old('sale_date')}}" type="text" class="form-control @error('title')
        is-invalid
        @enderror" id="sale_date" name="sale_date" placeholder="Inserire data di uscita">
        <div class="invalid-feedback">
          {{$message}}
        </div>
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input value="{{old('type')}}" type="text" class="form-control @error('title')
        is-invalid
        @enderror" id="type" name="type" placeholder="Inserire la tipologia dell'articolo">
        <div class="invalid-feedback">
          {{$message}}
        </div>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Textarea</label>
        <textarea value="{{old('description')}}" class="form-control" id="desctiption" name="description" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-secondary">Conferma</button>
    </div>
    
  </form>
@endsection