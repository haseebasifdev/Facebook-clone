<x-app>
    <ul>
        @foreach ($notifications as $notify)
        <a href="/notificatios/{{$notify->id}}/post" style=" text-decoration:none" class=" text-dark">
            <div class=" border p-3  {{$notify->open ? ' bg-light' : ' bg-primary text-white'}}"><img
                    class=" rounded-circle mr-2" src="{{$notify->notifyUser()->avatar}}" width="7%"
                    alt="">{{$notify->notifyUser()->name}}<span> {{$notify->type}}</span> to Your post.
            </div>
        </a>
        @endforeach

    </ul>
</x-app>
