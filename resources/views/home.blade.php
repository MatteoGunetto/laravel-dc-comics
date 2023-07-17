@extends('layout.body')
@section('content')
    <main class="text-center">
        <h2>Mostra tutti i Comics</h2>
        <div class="mb-5">
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Clicca per i Comics</a>
        </div>
        <h2>Inserisci un nuovo Comic</h2>
        <div>
            <a class="btn btn-success" href="{{ route('comics.create') }}">Clicca per inserire un nuovo Comic</a>
        </div>
    </main>
@endsection
