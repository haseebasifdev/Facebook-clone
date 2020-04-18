<form method="POST" action="/friendrequests/{{$user->id}}">
    @csrf
    @method('delete')
    <button class="btn btn-light btn-sm " style="left:calc(80% - 10px); bottom:10%" type="submit">
        Pending Request
    </button>
    {{-- <div class=" text-danger text-center position-absolute" style="font-size:10px;">
        Click to
        Cancel</div> --}}
</form>
