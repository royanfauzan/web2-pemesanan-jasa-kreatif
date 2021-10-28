@extends('layout.main')
@section('content')
<div class="row d-flex justify-content-center align-items-center mt-5">
    <div class="col-4 col-md-0 border-end me-3">
        <img class="mb-4 img-center rounded" src="profil.jpg" width="250" height="250">
    </div>
    <div class="col-5 col-md-5  ms-3">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center text-primary"><b>REGISTRASI</b></h1>
            <form action="/registrasi" method="POST">
                @csrf
                <div class="text-center">
                    <img class="mb-4 img-center rounded" src="profil.jpg" alt="" width="120" height="120">
                </div>        
                <div class="form-floating">
                    <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="NIK" value="{{ old('nik') }}">
                    <label for="nik">NIK</label>
                    @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('namadepan') is-invalid @enderror" id="namadepan" name="namadepan" placeholder="Nama Depan" value="{{ old('namadepan') }}">
                    <label for="namadepan">Nama Depan</label>
                    @error('namadepan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('namabelakang') is-invalid @enderror" id="namabelakang" name="namabelakang" placeholder="Nama Belakang" value="{{ old('namabelakang') }}">
                    <label for="namabelakang">Nama Belakang</label>

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
                <button class="w-100 btn btn-lg btn-outline-primary" type="submit">Register</button>
            </form>
            <p class="mt-5 mb-3 text-muted">Sudah memiliki akun? <a href="/login">Login</a></p>
        </main>
    </div>
</div>
@endsection