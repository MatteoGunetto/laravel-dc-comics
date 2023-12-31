@extends('layout.body')

@section('content')
        <div class="container m-auto">
            <button type="home" class="btn btn-primary"><a href="/" class=" fw-bold text-light text-decoration-none">HOME</a></button>
            <button type="home" class="btn btn-info"><a href="comics/create" class=" fw-bold text-dark text-decoration-none">Add Comic</a></button>
            <div class="row g-3">
                @foreach ($comics as $element)
                <div class="col">
                    <div class="card bg-dark  text-light" style="width: 400px; height: 580px ">
                        <h5 class="p-2 card-title text-center">{{ $element->title }}</h5>
                        <img class="m-auto" src={{ $element->thumb }} class="card-img-top" alt="{{ $element->title }}">
                        <div class="card-body pt-1">
                            <h6>{{ $element->series }}</h6>
                            <p class="card-text">{{ $element->price }}$</p>
                            <a  href="{{ route('comics.show', $element->id) }}" class="btn btn-primary fw-bold text-light text-decoration-none">Vedi dettagli</a>
                            <a  href="{{ route('comics.edit', $element->id) }}" class="btn btn-warning fw-bold text-dark text-decoration-none">Modifica </a>
                            <form class="d-inline" action="{{ route('comics.destroy', $element->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger py-1 px-2" type="submit">
                                    <i class="fa-solid fa-eraser"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
