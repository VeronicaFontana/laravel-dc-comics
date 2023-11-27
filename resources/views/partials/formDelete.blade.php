<form
    class="d-inline-block"
    action="{{ route('comics.destroy', $item) }}"
    method="POST"
    onsubmit="return confirm('Sei sicuro di voler eliminare {{ $item->title }}?')"
>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
</form>
