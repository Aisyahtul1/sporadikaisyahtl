@extends('layoutadmin.master')
@section('title','Tambah Data Masyarakat')
@section('judul','Tambah Data Masyarakat ')
@section('content')
<section class="content">
    <div class="card col-8 m-auto">
        <div class="card-header">
          <h3 class="card-title">
              Form Tambah Data
          </h3>
        </div>
    <div class="card-body">
        <form method="post" action="/masyarakat/store/" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="text" value="{{ old('nik_mas') }}" class="form-control @error('nik_mas') is-invalid @else is-valid @enderror" name="nik_mas">
                @error('nik_mas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" value="{{ old('nm_mas') }}" class="form-control @error('nm_mas') is-invalid @enderror" name="nm_mas">
                @error('nm_mas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir">
            </div>
            <div class="mb-3">
                <label class="form-label">Umur</label>
                <input type="text" class="form-control" name="umur_mas">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-laki">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan_mas">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
          <!-- /.card-body -->
      {{-- <div class="card-footer">
        Footer
      </div> --}}
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</section>
@endsection