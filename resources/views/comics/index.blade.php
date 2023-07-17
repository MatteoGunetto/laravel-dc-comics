@extends('layout.body')

@section('content')
    <main>
        <div class="container m-auto">
            <div class="row g-3">
                @foreach ($comics as $element)
                <div class="col">
                    <div class="card bg-dark text-light" style="width: 500px;">
                        <h5 class="p-2 card-title text-center">{{ $element->title }}</h5>
                        <img class="m-auto" src={{ $element->thumb }} class="card-img-top" alt="{{ $element->title }}">
                        <div class="card-body pt-1">
                            <h6>{{ $element->series }}</h6>
                            <p class="card-text">{{ $element->price }}</p>
                            <a href="{{ route('comics.show', $element->id) }}" class="btn btn-primary">Vedi dettagli</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
