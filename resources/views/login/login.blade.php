@extends('layout.main')
@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-4 col-md-4">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center text-primary"><b>LOGIN</b></h1>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/login" method="POST">
                @csrf
                <div class="text-center">
                    <img class="mb-4 img-center rounded" src="profil.jpg" alt="" width="120" height="120">
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" id="tampilPass" value="remember-me"> Tampilkan Password
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <p class="mt-5 mb-3 text-muted">Belum memiliki akun? <a href="/registrasi">Register</a></p>
        </main>
    </div>
</div>

@endsection