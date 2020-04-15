<ul class="position-fixed side-link-ul">
    <li class=" mb-2">

        <a href="/profiles/{{auth()->user()->id}}" class="side-link my-3 ">
            <div class=" d-flex align-items-center">
                <img src="{{auth()->user()->avatar}}" class="rounded-circle mr-2" width="15%" height="15%" alt=""
                    srcset="">
                {{auth()->user()->name}}
            </div>
        </a>
    </li>
    <li class=" mb-2">
        <a href="/posts" class="side-link">
            <i class="fas fa-house-user mr-2"></i>Home</a>
    </li>
    <li class=" mb-2">
        <a href="/friendrequests" class=" side-link">
            <i class="fas fa-user-friends mr-2"></i>Request <sup style="font-size:60%"
                class=" text-white bg-danger px-1 rounded rounded-circle">{{auth()->user()->friendrequests->count()}}</sup></a>
    </li>
    <li class="mb-2 ">
        <a href="/" class=" side-link"><i class="fas fa-bell mr-2"></i>Notification</a>
    </li>
    <li class=" mb-2">
        <a href="/" class=" side-link"><i class="fas fa-envelope mr-2"></i>Messages</a>
    </li>
    <li class="mb-2 ">
        <a href="/profiles/{{auth()->user()->id}}" class=" side-link"><i class="fas fa-user mr-2"></i>Profile</a>
    </li>
    <li class="mb-2 ">
        <a href="/addfriends" class=" side-link"><i class="fas fa-users mr-2"></i>Add Friends</a>
    </li>

    <li class="mb-2 ">
        <a href="/" class=" side-link"><i class="fas fa-address-card mr-2"></i>About</a>
    </li>
    <li class="mb-2 ">
        {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
        </a> --}}

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="side-link"><i class="fas fa-power-off mr-2"></i>Logout</button>
        </form>


    </li>
</ul>