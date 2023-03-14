@include('header')
<form method="post" action="{{route('register-user')}}"> {{-- register-user from route --}}
    @csrf {{-- @csrf is used for security purpose  --}}
    <div class="container mt-3">
        <div class="card">
            <div class="text-center mt-3 mb-3 fw-bold">
                <span class="fs-4">Register</span>
            </div>

            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
             @if(Session::has('failed'))
            <div class="alert alert-danger">{{Session::get('failed')}}</div>
            @endif

            <div class="container">
            <div class="mb-3">
                <label for="username" class="form-label">Username :</label>
                <input type="text" class="form-control" name="username" value="{{old('username')}}">
                <span class="text-danger">@error('username') {{$message}} @enderror</span>
            </div>            
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="text" class="form-control" name="email"  value="{{old('email')}}">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>

            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile :</label>
                <input type="text" class="form-control" name="mobile"  value="{{old('mobile')}}">
                <span class="text-danger">@error('mobile') {{$message}} @enderror</span>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password :</label>
                <input type="password" class="form-control" name="password"  value="{{old('password')}}">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary mb-3" name="save">Submit</button>
            </div>
            <div class="text-center mb-3">
                <span>Already have an account ? <a href="{{url('login')}}"> Login</a></span>
            </div>
            </div>
        </div>
    </div>
</form>

@include('footer')