@extends("layouts.main")

@section("content")

    <div class="container my-5 ">
        <h1>Lista Fumetti</h1>
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
                        <td><a href="{{ route("comics.show", ($item->id)) }}">Info</a></td>
                        <td><a href="{{ route("comics.edit", ($item->id)) }}">Modifica</a></td>
                        <td><button type="button" class="btn btn-danger" href=""><i class="fa-solid fa-ban"></i></button></td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

@endsection
