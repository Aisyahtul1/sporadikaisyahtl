@extends('layoutadmin.master')
@section('title','Tambah Data Petugas')
@section('judul','Tambah Data Petugas ')
@section('content')
<section class="content">
    <div class="card col-8 m-auto">
        <div class="card-header">
          <h3 class="card-title">
              Form Tambah Data
          </h3>
        </div>
    <div class="card-body">
        <form method="post" action="/petugas/store/" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">NIK Petugas</label>
                <input type="text" value="{{ old('nik_petugas') }}" class="form-control @error('nik_petugas') is-invalid @else is-valid @enderror" name="nik_petugas">
                @error('nik_petugas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Petugas</label>
                <input type="text" value="{{ old('nm_petugas') }}" class="form-control @error('nm_petugas') is-invalid @enderror" name="nm_petugas">
                @error('nm_petugas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat_petugas">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor HP</label>
                <input type="text" class="form-control" name="hp_petugas">
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