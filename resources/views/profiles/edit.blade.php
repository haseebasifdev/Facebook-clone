<x-app>
    <div class="card">
        <div class="card-header">
            Edit Profile
        </div>
        <div class="card-body">
            <form method="POST" action="/profiles/{{auth()->id()}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" value="{{$user->email}}" name="email" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}"
                        placeholder="Enter email">
                    @error('email')
                    <p class=" text-danger text-small">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" value="{{$user->name}}" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email">
                    @error('name')
                    <p class=" text-danger text-small">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Choose Profile</label>
                    <div class=" d-flex">
                        <input type="file" class="form-control-file" id="" name="avatar">
                        <img src="{{$user->avatar}}" width="6%" alt="" srcset="">
                    </div>
                    @error('avatar')
                    <p class=" text-danger text-small">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                    @error('password')
                    <p class=" text-danger text-small">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1"
                        placeholder="Confirm Password">
                </div>
                @error('password_confirmation')
                <p class=" text-danger text-small">{{$message}}</p>
                @enderror

                <div class=" mt-3">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

</x-app>





<!-- Button trigger modal -->


{{-- 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/profiles/{{auth()->id()}}" enctype="multipart/form-data">
@csrf
@method('put')
<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" value="{{auth()->user()->email}}" name="email" class="form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp" placeholder="Enter email">
    @error('email')
    <p class=" text-danger text-small">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" value="{{auth()->user()->name}}" name="name" class="form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp" placeholder="Enter email">
    @error('name')
    <p class=" text-danger text-small">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Choose Profile</label>
    <div class=" d-flex">
        <input type="file" class="form-control-file" id="" name="avatar">
        <img src="{{auth()->user()->avatar}}" width="6%" alt="" srcset="">
    </div>
    @error('avatar')
    <p class=" text-danger text-small">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    @error('password')
    <p class=" text-danger text-small">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1"
        placeholder="Confirm Password">
</div>
@error('password_confirmation')
<p class=" text-danger text-small">{{$message}}</p>
@enderror

<div class=" mt-3">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
</div>
</div>
</div>
</div> --}}