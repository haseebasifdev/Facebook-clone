<x-app>
    <ul>
        @foreach ($notifications as $notify)
        <a href="/posts/{{$notify->post_id}}" style=" text-decoration:none" class=" text-dark">
            <div class=" border p-3 bg-light"><img class=" mr-2" src="{{$notify->notifyUser()->avatar}}" width="7%"
                    alt="">{{$notify->notifyUser()->name}}<span> {{$notify->type}}</span> to Your post.
            </div>
        </a>
        @endforeach

    </ul>
</x-app>
