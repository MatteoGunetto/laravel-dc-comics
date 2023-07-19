@extends('layout.body')

@section('content')
    <main>
        <div class="container m-auto">
            <button type="home" class="btn btn-primary"><a href="/" class=" fw-bold text-light text-decoration-none">HOME</a></button>
            <button type="home" class="btn btn-primary"><a href="/comics" class=" fw-bold text-light text-decoration-none">Add Comic</a></button>
            <div class="row g-3">
                <div class="col">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                        @endforeach
                    @endif
                    <form action="{{ route('comics.update', $comic->id) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo:</label>
                            <input required
                            type="text"
                            name="title"
                            class="form-control"
                            id="title"
                            value="{{ old('title', $comic->title) }}">
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie:</label>
                            <input
                            required
                            type="text"
                            name="series"
                            class="form-control"
                            id="series"
                            value="{{ old('series', $comic->series) }}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo:</label>
                            <input required
                            type="number"
                            min="1"
                            step="0.01"
                            name="price"
                            class="form-control"
                            id="price"
                            value="{{ old('price', $comic->price) }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione:</label>
                            <textarea
                            type="text"
                            name="description"
                            class="form-control"
                            rows="6"
                            id="description">{{ old('description', $comic->description) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Modifica Comic</button>
                    </form>
                </div>
        </div>
    </main>
@endsection














