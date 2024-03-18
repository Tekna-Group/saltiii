@extends('layouts.app')

@section('content')

<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Register</h4>
                  <p class="mb-0">Please fill up the form to register</p>
                </div>
             
              
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="card-body">
                       
                        <div class="mb-3">
                            <input id="name" type="text" placeholder='Name' class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                        <div class="mb-3">
                            <input id="email" type="email" placeholder='Email Address'  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        </div>
                        <div class="mb-3">
                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" aria-label="Password" required>
                        </div>
                        <div class="mb-3">
                       
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"  required></div>
                     
                        <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Register</button>
                        </div>
                    </div>
                </form>
                @if($errors->any())
                    <div class="form-group alert alert-danger alert-dismissable text-white">
                        <strong>{{$errors->first()}}</strong>
                    </div>
                @endif
                
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-4 text-sm mx-auto">
                        Already have an account? 
                      <a href="{{url('login')}}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                    </p>
                  </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                {{-- <p class="text-white position-relative">life will reward you with a new <b>HELLO</b></p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
