

@extends('layouts/main')

@section('main-section')
<div class="container-fluid px-0">
    <div class="main-body mt-5 pt-md-5">
        <div class="row px-md-5 px-2 pb-md-5 mx-md-5">
            <div class="col-lg-4">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                            <div class="mt-3">
                                <h4>{{$singleDetails->first_name}} {{$singleDetails->last_name}}</h4>
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                                <p class="text-muted font-size-sm">{{$singleDetails->email}}</p>
                                <button class="btn btn-primary">Follow</button>
                                {{-- <button class="btn btn-outline-primary">Message</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4 mt-4 mt-md-0">
                    <div class="card-body">
                        <form id="editForm" action="{{ route('updateDetails') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">First Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control dashboardForm @error('first_name') is-invalid @enderror" value="{{$singleDetails->first_name}}" name="first_name" readonly>
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Last Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control dashboardForm @error('last_name') is-invalid @enderror" value="{{$singleDetails->last_name}}" name="last_name" readonly>
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="email" class="form-control dashboardForm" value="{{$singleDetails->email}}" name="email" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary d-flex justify-content-end">
                                    <button type="button" id="editButton" class="btn btn-primary px-4">Edit</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card mb-5">
                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Other Users</h5>
                                <ul class="list-group list-group-flush">
                                    @php
                                        $index=1;
                                    @endphp
                                    @foreach($allDetails as $user)
                                        <li class="list-group-item">
                                            <div class="d-sm-flex justify-content-between ">
                                                <div>
                                                   <span>{{$index++}}:</span> {{ $user->first_name }} {{ $user->last_name }}
                                                </div>
                                                <div>
                                                    {{ $user->email }}
                                                </div>
                                            </div>
                                            
                                           </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            
            <script>
                document.getElementById('editButton').addEventListener('click', function() {
                    var form = document.getElementById('editForm');
                    var inputs = form.querySelectorAll('input[type="text"], input[type="email"]');
            
                    for (var i = 0; i < inputs.length; i++) {
                        inputs[i].readOnly = !inputs[i].readOnly;
                    }
            
                    var button = document.getElementById('editButton');
                    if (button.innerHTML === 'Edit') {
                        button.innerHTML = 'Save Changes';
                    } else {
                        button.innerHTML = 'Edit';
                        form.submit();
                    }
                });
            </script>
            
@endsection


