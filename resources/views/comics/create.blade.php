@extends("layouts.main")

@section("content")

    <h1 class="text-center my-5">Aggiungi nuovo fumetto</h1>
    <div class="container">
        <form action="{{ route("comics.store") }}"" method="POST">

            @csrf

            <div class="mb-3">
                <label for="titleInput" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="titleInput" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrizione</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumbInput" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumbInput" name="thumb">
            </div>
            <div class="mb-3">
                <label for="priceInput" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="priceInput" name="price">
            </div>
            <div class="mb-3">
                <label for="seriesInput" class="form-label">Serie</label>
                <input type="text" class="form-control" id="seriesInput" name="series">
            </div>
            <div class="mb-3">
                <label for="saleInput" class="form-label">Data di vendita</label>
                <input type="text" class="form-control" id="saleInput" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="typeInput" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="typeInput" name="type">
            </div>
            <input class="btn btn-primary" type="submit" value="Salva">
        </form>
    </div>

@endsection
