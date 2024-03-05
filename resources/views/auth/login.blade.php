@extends('layouts.main')
@section('main-section')

    <div class="content my-5">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-12 col-lg-6 mx-auto">
             
                        <img src="{{asset('assets/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid loginimage">
                
        
        </div>
        <div class="col-md-12 col-lg-6 m-auto contents">
        <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="mb-4">
        <h3>Sign In</h3>
        <p class="mb-2">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
        </div>
        <div class="mb-3 text-center">
            Do not have an account? <span><a href="{{route('register')}}">Sign Up</a></span>
        </div>
        <form action="{{route('userlogin')}}" method="post">
                @csrf
        <div class="form-group first mt-3">
        
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        @error('email')
        <span class="text-danger is-invalid" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <div class="form-group last mt-3">
    
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        @error('password')
        <span class="text-danger is-invalid" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <div class="d-flex mt-3 mb-5 align-items-center">
        <span class="ms-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
        </div>
        <input type="submit" value="Log In" class="btn btn-block btn-primary w-100 rounded-pill">
        </form>       
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>


@endsection