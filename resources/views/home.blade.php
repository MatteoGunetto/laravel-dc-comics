@extends('layout.body')

@section('content')
    <main class="text-center">
        <h2>Mostra tutti i Comics</h2>
        <a class="btn btn-primary" href="{{ route('comics.index') }}">Clicca per i Comics</a>
    </main>
@endsection
