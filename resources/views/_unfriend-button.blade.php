<form method="POST" action="/friends/{{$user->id}}">
    @csrf
    @method('delete')
    <div class=" float-right">
        <button class="btn btn-light btn-sm position-absolute" style="left:calc(90% - 10px); bottom:3%" type="submit">
            Friends
        </button>
        {{-- <div class=" text-danger" style="font-size:10px">Click to Cancel</div> --}}
    </div>
</form>