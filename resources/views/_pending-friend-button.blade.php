<form method="POST" action="/friendrequests/{{$user->id}}">
    @csrf
    @method('delete')
    <button class="btn btn-primary btn-sm" type="submit">
        Pending Request
    </button>
    <div class=" text-danger text-center" style="font-size:10px">Click to Cancel</div>
</form>
