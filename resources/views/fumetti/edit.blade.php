@extends('layouts.home')

@section('content')
    <h2>Inserimento Nuovo</h2>
    <form action="{{ route('fumetti.update', $fumetti) }}" method="POST">
        @csrf

        @method('PUT')

        <div class="container">
            <div class="mb-3">
                <label for="title" class="form-label">NOME ARTICOLO</label>
                <input value='{{ $fumetti->title }}' type="text" class="form-control" id="title" name="title"
                    placeholder="Inserire titolo">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Url img</label>
                <input value='{{ $fumetti->image }}' type="text" class="form-control" id="image" name="image"
                    placeholder="Inserire percorso immagine">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input value='{{ $fumetti->price }}' type="text" class="form-control" id="price" name="price"
                    placeholder="Inserire prezzo">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Albo</label>
                <input value='{{ $fumetti->series }}' type="text" class="form-control" id="series" name="series"
                    placeholder="Inserire albo della storia">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input value='{{ $fumetti->sale_date }}' type="text" class="form-control" id="sale_date" name="sale_date"
                    placeholder="Inserire data di uscita">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input value='{{ $fumetti->type }}' type="text" class="form-control" id="type" name="type"
                    placeholder="Inserire la tipologia dell'articolo">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Textarea</label>
                <textarea value='{{ $fumetti->description }}' class="form-control" id="desctiption" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Conferma</button>
        </div>

    </form>
@endsection
