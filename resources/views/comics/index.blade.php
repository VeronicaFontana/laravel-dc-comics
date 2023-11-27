@extends("layouts.main")

@section("content")

    <div class="container my-5">
        <h1 class="text-center">Lista Fumetti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azioni</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->series }}</td>
                        <td>{{ $item->type }}</td>
                        <td>
                            <a href="{{ route("comics.show", $item) }}" class="btn btn-success"><i class="fa-solid fa-circle-info"></i></a>
                            <a href="{{ route("comics.edit", $item) }}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                            @include("partials.formDelete")
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

@endsection
