<div class="post">
    <div class="card">
        <div class="card-header">
            Create Post
        </div>
        <div class="card-body">
            <form method="POST" action="/posts">
                @csrf
                <div class="form-group">
                    <div class="d-flex">
                        <img src="{{auth()->user()->avatar}}" class=" rounded-circle" width="50px" height="50px" alt=""
                            srcset="">

                        <textarea class="form-control ml-2" name="body" placeholder="What's on your mind?"></textarea>

                    </div>
                    <button class="btn btn-primary btn-sm btn-block mt-3 text-white font-weight-bold">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
