@extends('layout.main')

@section('content')
    <h1>HALAMAN DASHBOARD</h1>
    @if (session()->has('aksesError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('aksesError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@endsection