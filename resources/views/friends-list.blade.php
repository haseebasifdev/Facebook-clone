<ul class="border border-right-0 border-top-0 border-bottom-0 position-fixed  ml-1 user">

    @forelse (auth()->user()->friends as $user)
    <li class="user">
        <a href="/profiles/{{$user->id}}" class="user">
            <div class=" d-flex align-items-center">
                <img src="{{$user->avatar}}" class=" rounded-circle mr-2" width="17%" alt="" srcset="">
                {{$user->name}}
            </div>
        </a>
    </li>
    @empty
    <h4>No friends yet</h4>
    @endforelse
</ul>
