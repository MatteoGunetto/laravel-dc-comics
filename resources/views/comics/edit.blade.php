@extends('layout.body')

@section('content')
    <main>
        <div class="container m-auto">
            <div class="row g-3">
                <form action="{{ route('comics.update', $comic->id) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo:</label>
                            <input required type="text" name="title" class="form-control" id="title" value="{{ $comic->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie:</label>
                            <input required type="text" name="series" class="form-control" id="series" value="{{ $comic->series }}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo:</label>
                            {{-- da trasformare in numero --}}
                            <input required type="text" name="price" class="form-control" id="price" value="{{ $comic->price }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione:</label>
                            <textarea type="text" name="description" class="form-control" id="description">{{ $comic->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Modifica Comic</button>
                    </form>
            </div>
        </div>
    </main>
@endsection
