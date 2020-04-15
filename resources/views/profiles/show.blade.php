<x-profileshow class="">
    <div class="show">
        <div class=" position-relative mb-4">
            <img src="/images/cover.jfif" class=" " width="100%" alt="" srcset="">
            <img src="{{$user->avatar}}" class="position-absolute rounded rounded-circle"
                style="left:calc(2%); bottom:3%" width="20%" alt="" srcset="">
            <a href="/profiles/{{auth()->id()}}/edit" class="btn btn-light btn-sm position-absolute"
                style="left:calc(70%); bottom:3%">
                Update info
            </a>
            {{-- @include('profiles.edit') --}}
        </div>
        @can('view', $user)
        @if (auth()->user()->sendpendingfriendrequest($user))
        <div>
            @include('_pending-friend-button')
        </div>
        @else
        @if (auth()->user()->hasfriends($user))
        @include('_unfriend-button')
        @else
        @include('_add-friend-button')
        @endif
        @endif
        @endcan
        <div class="row">
            <div class=" col-md-4 col-sm-5 col-6">

            </div>
            <div class=" col-md-8 col-sm-7 col-6">
                <div>
                    {{-- @if (auth()->user()->id===$user->id) --}}
                    @can('update',$user)

                    @include('create-post-card')
                    <!-- Modal -->
                    @endcan
                </div>
                <div>
                    <div class=" ">

                        @foreach ($user->posts as $post)

                        <div class="post_body border border-grey rounded my-2 p-3 bg-white">
                            <div class=" d-flex  align-items-center">
                                <img src="{{$user->avatar}}" class=" rounded-circle" width="50px" height="50px" alt=""
                                    srcset="">
                                <div class="ml-2">
                                    <h5 style="font-size:1.5vw" class="font-weight-bold">{{$post->user->name}}</h5>

                                    <small style="font-size:0.8vw">{{$post->created_at->diffForHumans()}}</small>
                                </div>
                            </div>

                            <p style="font-size:1vw" class=" text-muted mt-4">{{$post->body}}</p>

                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-profileshow>