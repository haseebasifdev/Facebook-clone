<x-app>
    <div class=" container">
        @include('create-post-card')
        @foreach ($posts as $post)

        <div class="post_body border border-grey rounded my-2 p-3 bg-white">
            <div class=" d-flex  align-items-center">
                <img src="{{$post->user->avatar}}" class=" rounded-circle" width="50px" height="50px" alt="" srcset="">
                <div class="ml-2">
                    <h5 class="font-weight-bold">{{$post->user->name}}</h5>

                    <small>{{$post->created_at->diffForHumans()}}</small>
                </div>
            </div>

            <p class=" text-muted mt-4">{{$post->body}}</p>

        </div>

        @endforeach
    </div>
</x-app>
