<div class="card">
    @if (!auth()->user()->hasFriends($user))
    <div class="card-header text-uppercase">
        DO YOU KNOW {{$user->name}}?
    </div>
    @endif
    <div class="card-body">
        <form method="POST" action="/addfriend/{{$user->id}}">
            @csrf
            <div class="form-group d-flex align-items-center justify-content-between">
                @if (!auth()->user()->hasFriends($user))
                <div class="">
                    <p>To see what he shares with friends, send him a friend request.</p>
                </div>
                @endif
                <div class=" {{!auth()->user()->hasFriends($user)? 'float-right': ''}}">
                    <button class="btn btn-light btn-sm  mt-3 border font-weight-bold" type="submit">

                        @if (auth()->user()->hasFriends($user))
                        <i class="fas fa-check mr-1"></i> Friends
                    </button>
                    <div class="">
                        <small class=" text-danger">Click to Unfriend</small>
                    </div>
                    @else
                    <i class="fas fa-user-plus mr-1"></i> Add Friend
                    </button>

                    @endif

                </div>
            </div>
        </form>
        {{-- <form method="POST" action="/addfriend/{{$user->id}}">
            @csrf
            <div class="form-group d-flex align-items-center justify-content-between">
                @if (!auth()->user()->hasFriends($user))
                <div class="">
                    <p>To see what he shares with friends, send him a friend request.</p>
                </div>
                @endif
                <div class=" {{!auth()->user()->hasFriends($user)? 'FLoat-right': ''}}">
                    <button class="btn btn-light btn-sm  mt-3 border font-weight-bold" type="submit">

                        @if (auth()->user()->hasFriends($user))
                        <i class="fas fa-check mr-1"></i> Friends
                    </button>
                    <div class="">
                        <small class=" text-danger">Click to Unfriend</small>
                    </div>
                    @else
                    <i class="fas fa-user-plus mr-1"></i> Add Friend
                    </button>

                    @endif

                </div>
            </div>
        </form> --}}
        {{-- <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Post</a> --}}

    </div>
</div>
