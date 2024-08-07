@extends('layoutadmin.master')
@section('title','Data Petugas')
@section('judul','Data Petugas ')
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            <a href="/petugas/form" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a>
        </h3>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nomor</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Nomor Handphone</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($pet as $data)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$data->nik_petugas}}</td>
                        <td>{{$data->nm_petugas}}</td>
                        <td>{{$data->alamat_petugas}}</td>
                        <td>{{$data->hp_petugas}}</td>
                        <td>

                        <a href="/petugas/edit/{{$data->id}}" class="btn btn-xs btn-info"><i class="fas fa-pencil-alt"></i> Edit</a>

                        {{-- <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-default{{$data->id}}">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </button> --}}
                        <div class="modal fade" id="modal-default{{$data->id}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Peringatan</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  Yakin data tahun ajaran {{$data->nm_petugas}} ingin dihapus?
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                  <form action="/petugas/{{$data->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                  </form>

                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                    </td>
                  </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak Ada Data</td>
                    </tr>
                @endforelse

            </tbody>
          </table>
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
