<div class="collapse" id="collapsepost{{$post->id}}">
    <div class=" card-body p-4 m-4 ">
        @foreach ($post->comments()->get() as $comment)



        <div class="row mb-3 align-items-start">
            <div class=" col-2 mr-1">
                <a href="/profiles/{{$comment->user_id}} " class=" ">
                    <img src="{{$comment->commentUser()->avatar}}" class="rounded-circle mr-2" width="70%"
                        height="70%" alt="" srcset="">
                </a>
            </div>
            <div class="border border-light  card-header col-9 " style="border-radius:25px">
                <a href="/profiles/{{$comment->user_id}} ">
                    {{auth()->user()->name}}
                </a>
                {{$comment->body}}
            </div>
        </div>
        @endforeach
    </div>
</div>