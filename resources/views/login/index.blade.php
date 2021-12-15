@extends('layouts.main')


@section('container')
<div class="login">
<div class="card" style="box-shadow: 1px 1px 10px 10px rgba(1, 0, 0, 0.1); background-image: linear-gradient(#2f3148, #6f7691);">
    <div class="row">
      <div class="col-lg-5">
        <img src="/img/film.jpg" class="img-fluid rounded-start" alt="film">
      </div>
      <div class="col-lg-7 py-5">
          <div class="row justify-content-center">
          <div class="col-8">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
    
          @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
    
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center text-white">Please Login</h1>
                <form action="/login" method="post">
                  @csrf
                  <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3 text-white">Not Registered?</small>
                <a href="/register"><button class="w-100 btn btn-lg mt-3" style="background-color: #1de9b6">Register</button></a>
              </main>
          </div>
        </div>
            
        </div>
      </div>
    </div>
</div>
</div>
@endsection