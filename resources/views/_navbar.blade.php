<nav class="navbar navbar-expand-lg navbar-light bg-primary justify-content-center fixed-top">

    <div class="row">

        <a class="navbar-brand" href="/posts"><i class="fab fa-facebook-f"></i></a>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link d-block text-bold" href="/profiles/{{auth()->user()->id}}">
                        <img src="{{auth()->user()->avatar}}" class=" rounded-circle" width="25px" height="25px" alt=""
                            srcset="">

                        {{auth()->user()->name}}
                        {{-- <i class="fas fa-user-shield"></i> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/posts">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/friendrequests"><i class="fas fa-user-friends"></i><sup
                            style="font-size:50%"
                            class=" text-white bg-danger px-1 rounded rounded-circle">{{auth()->user()->friendrequests->count()}}</sup></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#"><i class="fab fa-facebook-messenger"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/notificatios"><i class="fas fa-bell"></i><sup style="font-size:50%"
                            class=" text-white bg-danger px-1 rounded rounded-circle">{{auth()->user()->newNotifications()->count()}}</sup></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
