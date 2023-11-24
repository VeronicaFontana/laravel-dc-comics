@extends("layouts.main")

@section("content")

    <div class="container">
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
                        <td>X</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

@endsection
