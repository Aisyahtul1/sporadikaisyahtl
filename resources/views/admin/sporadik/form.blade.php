@extends('layoutadmin.master')
@section('title','Tambah Data Sporadik')
@section('judul','Tambah Data Sporadik ')
@section('content')
<section class="content">
    <div class="card col-8 m-auto">
        <div class="card-header">
          <h3 class="card-title">
              Form Tambah Data
          </h3>
        </div>
    <div class="card-body">
        <form method="post" action="/sporadik/store/" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nomor SKT</label>
                <input type="text" value="{{ old('no_skt') }}" class="form-control @error('no_skt') is-invalid @else is-valid @enderror" name="no_skt">
                @error('no_skt')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Pilih Nama Pemilik</label>
                <select name="masyarakat" class="form-control" id="">
                    <option value="">-Pilih Nama Pemilik-</option>

                    @foreach ($mas as $data)
                        <option value="{{$data->id}}">{{$data->nm_mas}}</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">UKT Timur</label>
                <input type="text" class="form-control" name="ukt_timur">
            </div>
            <div class="mb-3">
                <label class="form-label">UKT Barat</label>
                <input type="text" class="form-control" name="ukt_barat">
            </div>
            <div class="mb-3">
                <label class="form-label">UKT Selatan</label>
                <input type="text" class="form-control" name="ukt_selatan">
            </div>
            <div class="mb-3">
                <label class="form-label">UKT Utara</label>
                <input type="text" class="form-control" name="ukt_utara">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Kepala Desa</label>
                <input type="text" class="form-control" name="kepala_desa">
            </div> 
            <div class="mb-3">
                <label class="form-label">Pilih Nama Petugas</label>
                <select name="petugas" class="form-control" id="">
                    <option value="">-Pilih Nama Petugas-</option>

                    @foreach ($pet as $data)
                        <option value="{{$data->id}}">{{$data->nm_petugas}}</option>
                    @endforeach

                </select>
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