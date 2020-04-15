<form method="POST" action="/friends/{{$user->id}}">
    @csrf
    @method('delete')
    <div class="form-group d-flex align-items-center justify-content-between">
        <button class="btn btn-danger btn-sm" type="submit">
            Delete
        </button>
    </div>
</form>
