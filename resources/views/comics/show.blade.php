@extends('layout.body')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <div class="card" style="width: 500px;">
                            <img src={{ $comic->thumb }} class="card-img-top mx-auto my-2" alt="{{ $comic->title }}">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $comic->title }}</h5>
                                <p class="card-text">{{ $comic->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
