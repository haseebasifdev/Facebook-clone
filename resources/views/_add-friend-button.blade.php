<form method="POST" action="/friendrequests/{{$user->id}}">
    @csrf
    {{-- <div class="form-group d-flex align-items-center justify-content-between"> --}}
    <button class="btn btn-primary btn-sm align-items-center" type="submit">
        <i class="fas fa-user-plus mr-1"></i>Add Friend
    </button>

</form>
