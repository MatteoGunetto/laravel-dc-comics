@extends('layout.body')

@section('content')
    <main>
        <div class="container">
            <button type="home" class="btn btn-primary"><a href="/" class=" fw-bold text-light text-decoration-none">HOME</a></button>
            <button type="home" class="btn btn-info"><a href="/comics" class=" fw-bold text-dark text-decoration-none">Comic List</a></button>
            <div class="row">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                            @endforeach
                        @endif
                    <form action="{{ route('comics.store') }}"
                        method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo:</label>
                            <input required
                            type="text"
                            name="title"
                            class="form-control"
                            id="title"
                            placeholder="Inserisci titolo"
                            value="{{ old('title') }}">
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie:</label>
                            <input required
                            type="text"
                            name="series"
                            class="form-control"
                            id="series"
                            placeholder="Inserisci la serie"
                            value="{{ old('series') }}">
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
                            placeholder="Inserisci il prezzo"
                            value="{{ old('price') }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione:</label>
                            <textarea type="text"
                            name="description"
                            class="form-control"
                            id="description"
                            rows="6"
                            placeholder="Inserisci descrizione comic">{{ old('description') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Thumb:</label>
                            <input required type="text" name="thumb" class="form-control" id="thumb" placeholder="Inserisci la thumb">
                        </div>
                        <button type="submit" class="btn btn-primary">Inserisci Comic</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
