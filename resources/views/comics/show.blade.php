@extends("layouts.main")

@section("content")

    <h1 class="text-center my-5">{{ $comic->title }}</h1>
    <div class="container d-flex">
        <div>
            <div class="img-box">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
        </div>
        <div>
            <div class="card"">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Prezzo:</b> {{ $comic->price }}</li>
                    <li class="list-group-item"><b>Serie:</b> {{ $comic->series }}</li>
                    <li class="list-group-item"><b>Data di vendita:</b> {{ $comic->sale_date }}</li>
                    <li class="list-group-item"><b>Tipo:</b> {{ $comic->type }}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
