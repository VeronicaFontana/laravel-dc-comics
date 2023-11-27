@extends("layouts.main")

@section("content")

    <h1 class="text-center my-5">Modifica {{ $comic->title  }}</h1>
    <div class="container">
        <form action="{{ route('comics.update', $comic) }}" method="POST">

            @csrf
            @method("PUT")

            <div class="mb-3">
                <label for="titleInput" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="titleInput" name="title" value={{ $comic->title  }}>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrizione</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumbInput" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumbInput" name="thumb" value={{ $comic->thumb  }}>
            </div>
            <div class="mb-3">
                <label for="priceInput" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="priceInput" name="price" value={{ $comic->price  }}>
            </div>
            <div class="mb-3">
                <label for="seriesInput" class="form-label">Serie</label>
                <input type="text" class="form-control" id="seriesInput" name="series" value={{ $comic->series  }}>
            </div>
            <div class="mb-3">
                <label for="saleInput" class="form-label">Data di vendita</label>
                <input type="text" class="form-control" id="saleInput" name="sale_date" value={{ $comic->sale_date  }}>
            </div>
            <div class="mb-3">
                <label for="typeInput" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="typeInput" name="type" value={{ $comic->type  }}>
            </div>
            <input class="btn btn-primary" type="submit" value="Salva">
        </form>
    </div>

@endsection
