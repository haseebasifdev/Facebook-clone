<form method="POST" action="/friends/{{$user->id}}" class=" mr-2">
    @csrf
    @method('put')
    <div class="form-group d-flex align-items-center justify-content-between">
        <button class="btn btn-primary btn-sm" type="submit">
            Confirm
        </button>
    </div>
</form>
