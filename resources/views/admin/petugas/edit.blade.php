@extends('layoutadmin.master')
@section('title','Edit Data Petugas')
@section('judul','Edit Data Petugas ')
@section('content')
<section class="content">
    <div class="card col-8 m-auto">
        <div class="card-header">
          <h3 class="card-title">
              Form Edit Data
          </h3>
        </div>
        <div class="card-body">
          <form action="/petugas/{{$pet->id}}" method="POST">
              @method('PUT')
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">NIK</label>
                  <input type="text" name="nik_petugas" value="{{$pet->nik_petugas}}" readonly class="form-control" id="exampleInputEmail1" placeholder="NIK">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail2">Nama</label>
                  <input type="text" name="nm_petugas" value="{{$pet->nm_petugas}}"  class="form-control" id="exampleInputEmail2" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail2">Alamat</label>
                  <input type="text" name="alamat_petugas" value="{{$pet->alamat_petugas}}"  class="form-control" id="exampleInputEmail2" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Nomor HP</label>
                    <input type="text" name="hp_petugas" value="{{$mas->hp_petugas}}"  class="form-control" id="exampleInputEmail2" placeholder="Nomor HP">
                  </div>
              <button type="submit" class="btn btn-primary">Edit Data</button>
              <a href="/petugas" class="btn btn-secondary">Batal</a>
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