<x-app>
    <ul>

        @forelse ($users as $user)
        @if (!auth()->user()->hasFriends($user))
        @if (auth()->user()->id!==$user->id)


        <li class=" mb-2 d-flex justify-content-between">
            <div class=" d-flex">
                <img src="{{$user->avatar}}" class=" rounded-circle mr-2" width="50px">
                <a href="/profiles/{{$user->id}}" class="user d-flex align-items-center">{{$user->name}}
                </a>
            </div>
            @if (auth()->user()->sendpendingfriendrequest($user))
            <div>
            @include('_pending-friend-button')
            </div>
            @else
            @include('_add-friend-button')
            @endif
        </li>
        @endif
        @endif
        @empty
        <h4>No User Left</h4>
        @endforelse
    </ul>
</x-app>
