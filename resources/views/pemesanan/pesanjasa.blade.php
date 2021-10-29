@extends('layout.main')

@section('content')
<h1>HALAMAN PESAN JASA</h1>
<h3>Menu yg nanti di sini</h3>
<ul>
    <li>
        Form pesan
    </li>
</ul>
<div class="row justify-content-center">
    <div class="col-5">
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword">
            </div>
        </div>
    </div>
</div>
@endsection