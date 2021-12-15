@extends('layouts.main')

@section('container')
<div class="register">
<div class="card" style="box-shadow: 1px 1px 10px 10px rgba(1, 0, 0, 0.1); background-image: linear-gradient(#2f3148, #6f7691);">
    <div class="row">
      <div class="col-lg-5">
        <img src="img/film.jpg" class="img-fluid rounded-start" alt="film">
      </div>
      <div class="col-lg-7 py-3">
        <div class="row justify-content-center">
            <div class="col-8">
                <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center text-white">Registration Form</h1>
                <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3 text-white" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3 text-white">Already Registered?</small>
                <a href="/login"><button class="w-100 btn btn-lg mt-3" style="background-color: #1de9b6">Login</button></a>
                </main>
            </div>
        </div>
    </div>
</div>
</div>


@endsection