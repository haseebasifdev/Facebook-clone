<x-app>
    <ul>
        <h5 class=" text-primary border-bottom">Friend Request </h5>

        @forelse ($users as $user)
        {{-- @if (!auth()->user()->hasFriends($user))
        @if (auth()->user()->id!==$user->id) --}}

        <li class=" mb-2 d-flex justify-content-between align-items-center border-bottom p-3">
            <a href="/profiles/{{$user->id}}" class="user mr-5">
                <div class=" d-flex align-items-center">
                    <img src="{{$user->avatar}}" class=" rounded-circle mr-2" width="40px" alt="" srcset="">
                    {{$user->name}}
                </div>
            </a>
            <div class=" d-flex">
                @include('_confirm-friend-request-button')
                @include('_delete-friend-request-button')
            </div>


        </li>
        @empty
        <h4>No Friend Request</h4>
        @endforelse
    </ul>
</x-app>
