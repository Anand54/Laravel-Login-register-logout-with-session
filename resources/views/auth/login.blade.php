@include('header')

<form action="{{route('login-user')}}" method="post"> {{-- login-user from route --}}
    @csrf
    <div class="container mt-3">
        <div class="card">
            <div class="text-center mt-3 mb-3 fw-bold">
                <span class="fs-4">Login</span>
            </div>
            
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
             @if(Session::has('failed'))
            <div class="alert alert-danger">{{Session::get('failed')}}</div>
            @endif

            <div class="container">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email :</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{old('email')}}">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password :</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{old('password')}}">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary mb-3" name="save">Submit</button>
            </div>
            <div class="text-center mb-3">
                <span>New User ? <a href="{{url('register')}}"> Create a account</a></span>
            </div>
            </div>
        </div>
    </div>
</form>

@include('footer')