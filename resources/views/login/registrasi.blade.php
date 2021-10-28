@extends('layout.main')
@section('content')
<div class="row d-flex justify-content-center align-items-center mt-5">
    <div class="col-4 col-md-0 border-end me-3">
        <img class="mb-4 img-center rounded" src="profil.jpg" width="250" height="250">
    </div>
    <div class="col-5 col-md-5  ms-3">
        <main class="form-signin">
            <form>
                <h1 class="h3 mb-3 fw-normal text-center text-primary"><b>REGISTRASI</b></h1>
                <div class="text-center">
                    <img class="mb-4 img-center rounded" src="profil.jpg" alt="" width="120" height="120">
                </div>        
                <div class="form-floating">
                    <input type="number" class="form-control" id="inputNik" name="inputNik" placeholder="NIK">
                    <label for="inputNik">NIK</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="inputNamaDpn" name="inputNamaDpn" placeholder="Nama Depan">
                    <label for="inputNamaDpn">Nama Depan</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="inputNamaBlk" name="inputNamaBlk" placeholder="Nama Belakang">
                    <label for="inputNamaBlk">Nama Belakang</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="name@example.com">
                    <label for="inputEmail">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                    <label for="inputPassword">Password</label>
                </div>
        
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" id="tampilPass" value="remember-me"> Tampilkan Password
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-outline-primary" type="submit">Register</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
            </form>
        </main>
    </div>
</div>
@endsection