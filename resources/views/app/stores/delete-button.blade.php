<div class="d-flex justify-content-end">
    <form action="/stores/{{ $store['id'] }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete Store"><i class="bi bi-trash"></i></button>
    </form>
</div>