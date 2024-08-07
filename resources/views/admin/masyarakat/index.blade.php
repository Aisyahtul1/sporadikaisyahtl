@extends('layoutadmin.master')
@section('title','Data Masyarakat')
@section('judul','Data Masyarakat ')
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            <a href="/masyarakat/form" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a>
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
              <th>Pekerjaan</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($mas as $data)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$data->nik_mas}}</td>
                        <td>{{$data->nm_mas}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->pekerjaan_mas}}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#detail{{$data->id}}">
                                <i class="fa fa-eye"></i>
                            </button>

                            <!-- Modal Detail-->
                            <div class="modal fade" id="detail{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail {{$data->nm_mas}}</h1>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table">

                                            <tbody>
                                                    <tr>
                                                        <td>NIK</td>
                                                        <th scope="row">{{$data->nik_mas}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <th scope="row">{{$data->nm_mas}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Lahir</td>
                                                        <th scope="row">{{$data->tgl_lahir}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Umur</td>
                                                        <th scope="row">{{$data->umur_mas}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <th scope="row">{{$data->alamat}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <th scope="row">{{$data->jk}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Pekerjaan</td>
                                                        <th scope="row">{{$data->pekerjaan_mas}}</th>
                                                    </tr>
                                                    
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

                                    </div>
                                </div>
                                </div>
                            </div>

                        <a href="/masyarakat/edit/{{$data->id}}" class="btn btn-xs btn-info"><i class="fas fa-pencil-alt"></i> Edit</a>

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
                                  Yakin data tahun ajaran {{$data->nm_mas}} ingin dihapus?
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                  <form action="/masyarakat/{{$data->id}}" method="POST">
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
