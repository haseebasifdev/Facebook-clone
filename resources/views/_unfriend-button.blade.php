<form method="POST" action="/friendrequests/{{$user->id}}">
    @csrf
    @method('delete')
    <div class=" float-right">
    <button class="btn btn-primary btn-sm" type="submit">
        Friends
    </button>
    <div class=" text-danger" style="font-size:10px">Click to Cancel</div>
</div>
</form>
