<form method="POST" action="/friendrequests/{{$user->id}}">
    @csrf
    {{-- <div class="form-group d-flex align-items-center justify-content-between"> --}}
    <button class="btn btn-light btn-sm align-items-center " style="left:calc(80% - 10px); bottom:35%" type="submit">
        <i class="fas fa-user-plus mr-1"></i>Add Friend
    </button>

</form>
