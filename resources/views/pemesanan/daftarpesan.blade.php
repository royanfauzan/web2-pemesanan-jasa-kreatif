@extends('layout.main')

@section('content')
<div class="row mt-4">
<div class="col-md-5 justify-content-center">
<div class="row justify-content-center">
    <div class="col-6">
        <img class="mb-4 img-center rounded" src="profil.jpg" alt="" width="120" height="120">
    </div>
</div>
</div>

<div class="col-md-7">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Proyek</th>
      <th scope="col">Status</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($pesanans as $pesanan)
        <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $pesanan->judul_proyek }}</td>
        <td>{{ $pesanan->status }}</td>
        <td>{{ $pesanan->deskripsi }}</td>
        <td>
          <a class="btn btn-primary" href="/pesanjasa/{{ $pesanan->id }}/edit">Detail</a>
        </td>
        </tr>   
    @endforeach
    
  </tbody>
</table>
</div>
</div>
@endsection