<x-app>

    <div class=" my-2">
        @include('create-post-card')
        @foreach ($posts as $post)`
        <div class=" card">
            <div class="my-2 card-body">
                {{-- <div class="post_body border border-grey rounded  p-3 bg-white"> --}}
                <div class=" d-flex  align-items-center">
                    <img src="{{$post->user->avatar}}" class=" rounded-circle" width="50px" height="50px" alt=""
                        srcset="">
                    <div class="ml-2">
                        <h5 class="card-title">{{$post->user->name}}</h5>

                        <small>{{$post->created_at->diffForHumans()}}</small>
                    </div>
                </div>

                <p class="  mt-4 card-text">{{$post->body}}</p>

                {{-- </div> --}}

            </div>

            <div class=" card-body ">
                <div class="row  justify-content-between border-top ">
                    <div class=" col-md-6 mt-3">
                        <form action="/likes/{{$post->id}}" method="post">
                            @csrf
                            <button class="btn btn-light btn-block  text-dark "><i
                                    class="far fa-thumbs-up mr-1"></i>like
                                <span>{{$post->likes()}}</span> </button>
                        </form>
                    </div>
                    <div class=" col-md-6 mt-3">
                        <form action="" method="post">
                            @csrf
                            <button class="btn btn-light btn-block  text-dark "><i
                                    class="far fa-comment-alt mr-1"></i>Comment
                                <span>{{$post->comments()}}</span></button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>

</x-app>