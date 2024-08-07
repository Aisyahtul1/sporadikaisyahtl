@extends('layoutadmin.master')
@section('title','Tambah Data Masyarakat')
@section('judul','Tambah Data Masyarakat ')
@section('content')
<section class="content">
    <div class="card col-8 m-auto">
        <div class="card-header">
          <h3 class="card-title">
              Form Edit Data
          </h3>
        </div>
        <div class="card-body">
          <form action="/masyarakat/{{$mas->id}}" method="POST">
              @method('PUT')
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">NIK</label>
                  <input type="text" name="nik_mas" value="{{$mas->nik_mas}}" readonly class="form-control" id="exampleInputEmail1" placeholder="NIK">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail2">Nama</label>
                  <input type="text" name="nm_mas" value="{{$mas->nm_mas}}"  class="form-control" id="exampleInputEmail2" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail2">Tangggal Lahir</label>
                  <input type="date" name="tgl_lahir" value="{{$mas->tgl_lahir}}"  class="form-control" id="exampleInputEmail2" placeholder="Tanggal">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail2">Umur</label>
                  <input type="text" name="umur_ma" value="{{$mas->umur_ma}}"  class="form-control" id="exampleInputEmail2" placeholder="Umur">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail2">Alamat</label>
                  <input type="text" name="alamat" value="{{$mas->alamat}}"  class="form-control" id="exampleInputEmail2" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <select name="jk" class="form-control" id="exampleInputPassword1">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Pekerjaan</label>
                    <input type="text" name="pekerjaan_mas" value="{{$mas->pekerjaan_mas}}"  class="form-control" id="exampleInputEmail2" placeholder="Pekerjaan">
                  </div>
              <button type="submit" class="btn btn-primary">Edit Data</button>
              <a href="/masyarakat" class="btn btn-secondary">Batal</a>
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