@extends('layouts.main')
@section('main-section')

    <div class="content bg-background my-5">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-12 m-auto col-lg-6 ">
            <div class="d-flex justify-content-center ">
                <img src="{{asset('assets/images/signup.png')}}" alt="Image" class="img-fluid loginimage">
            </div>
        
        </div>
        <div class="col-md-12 mx-auto col-lg-6 contents ">
        <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="mb-4">
        <h3>Sign Up</h3>
        <p class="mb-2">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
        </div>
        <div class="mb-3 text-center">
            Already have an account? <span><a href="{{route('login')}}">Sign In</a></span>
        </div>
        <form action="{{route('usercreate')}}" method="post">
            @csrf
            <div class="form-group first ">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
               
            </div>
            @error('first_name')
            <span class="text-danger is-invalid" role="alert">
                <strong >{{ $message }}</strong>
            </span>
        @enderror
            
            <div class="form-group first mt-3">
                <input type="text" class="form-control " id="last_name" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
               
            </div>
            @error('last_name')
            <span class="text-danger is-invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <div class="form-group first mt-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                
            </div>
            @error('email')
                    <span class="text-danger is-invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <div class="form-group last mt-3">
                <input type="password" class="form-control " id="password" name="password" placeholder="Password">
                
            </div>
            @error('password')
            <span class="text-danger is-invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <div class="form-group last mt-3">
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
               
            </div>
           
            @error('confirm_password')
            <span class="text-danger is-invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            
        <input type="submit" value="Sign Up" class="btn btn-block btn-primary w-100 rounded-pill mt-4">
    </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>


@endsection