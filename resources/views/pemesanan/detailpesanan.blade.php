@extends('layout.main')

@section('content')
<div class="row mt-5">
    <div class="col-6">
        <h5 class="text-center">DETAIL PESANAN</h5>
        <div class="row">
            <div class="col-12 border ">
                <div class="m-4">

                    <form action="/pesanans/{{ $pesanan->id }}" method="POST">
                    @method('patch')
                    @csrf
                        <div class="form-group row mb-2">
                            <label for="idjasa" class="col-4 col-form-label">Id Jasa</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control-plaintext" id="idjasa" name="id" value="{{ $pesanan->id }}">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="judulproyek" class="col-4 col-form-label">Judul Proyek</label>
                            <div class="col-8">
                                <input type="text" class="form-control" id="judulproyek" name="judul_proyek" value="{{ $pesanan->judul_proyek }}">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="deskripsiproyek" class="col-4 col-form-label">Deskripsi Proyek</label>
                            <div class="col-8">
                                <textarea class="form-control" id="deskripsiproyek" name="deskripsi" rows="3">{{ $pesanan->deskripsi }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="deadline" class="col-4 col-form-label">Deadline</label>
                            <div class="col-8">
                                <input type="date" class="form-control" id="deadline" name="dedline" value="{{ $pesanan->dedline }}">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="limitbudget" class="col-4 col-form-label">Limit Budget</label>
                            <div class="col-8">
                                <input type="text" class="form-control" id="limitbudget" name="budget" value="{{ $pesanan->budget }}">
                            </div>
                        </div>
                        <button class="btn btn-primary" type='submit'>Simpan Perubahan</button>
                        <a class="btn btn-outline-danger" href="/pesanans">Kembali</a>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <img class="mb-4 img-center rounded" src="../profil.jpg" alt="" width="120" height="120">
    </div>

</div>
@endsection