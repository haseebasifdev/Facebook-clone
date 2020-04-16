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
                    {{-- <div class=" ">

                        @foreach ($user-$user->posts as $post)

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
        </div> --}}


        @foreach ($user->posts as $post)`
        <div class=" card">
            <div class="my-2 card-body">
                {{-- <div class="post_body border border-grey rounded  p-3 bg-white"> --}}
                <div class=" d-flex  align-items-center">
                    <img src="{{$user->avatar}}" class=" rounded-circle" width="50px" height="50px" alt=""
                        srcset="">
                    <div class="ml-2">
                        <h5 class="card-title">{{$user->name}}</h5>

                        <small>{{$post->created_at->diffForHumans()}}</small>
                    </div>
                </div>

                <p class="  mt-4 card-text">{{$post->body}}</p>

                {{-- </div> --}}

            </div>

            <div class=" card-body ">
                <div class="row  justify-content-between border-top ">
                    <div class=" col-md-6 mt-3 ">
                        <form action="/likes/{{$post->id}}" method="post">
                            @csrf
                            <button class="btn btn-light btn-block{{$post->liked() ? ' text-primary' : '' }} "><i
                                    class="far fa-thumbs-up mr-1 "></i>like
                                <span>{{$post->likes()->count()}}</span> </button>
                        </form>
                    </div>
                    <div class=" col-md-6 mt-3">
                        <form action="" method="post">
                            @csrf
                            <button class="btn btn-light btn-block  text-dark "><i
                                    class="far fa-comment-alt mr-1"></i>Comment
                                <span>{{$post->comments()->count()}}</span></button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
    </div>
    </div>
</x-profileshow>