@extends('layoutadmin.master')
@section('title','Data Sporadik')
@section('judul','Data Sporadik ')
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            <a href="/sporadik/form" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a>
        </h3>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nomor</th>
              <th>Nomor SKT</th>
              <th>Nama Pemilik</th>
              <th>Nama Petugas</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($spo as $data)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$data->no_skt}}</td>
                        <td>{{$data->masyarakat->nm_mas}}</td>
                        <td>{{$data->petugas->nm_petugas}}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#detail{{$data->id}}">
                                <i class="fa fa-eye"></i>
                            </button>
                            
                            <!-- Modal Detail-->
                            <div class="modal fade" id="detail{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail {{$data->no_skt}}</h1>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table">
                            
                                            <tbody>
                                                    <tr>
                                                        <td>Nomor SKT</td>
                                                        <th scope="row">{{$data->no_skt}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Pemilik</td>
                                                        <th scope="row">{{$data->masyarakat->nm_mas}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>UKT Timur</td>
                                                        <th scope="row">{{$data->ukt_timur}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>UKT Barat</td>
                                                        <th scope="row">{{$data->ukt_barat}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>UKT Selatan</td>
                                                        <th scope="row">{{$data->ukt_selatan}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>UKT Utara</td>
                                                        <th scope="row">{{$data->ukt_utara}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kepala Desa</td>
                                                        <th scope="row">{{$data->kepala_desa}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Petugas</td>
                                                        <th scope="row">{{$data->petugas->nm_petugas}}</th>
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

                        <a href="/sporadik/edit/{{$data->id}}" class="btn btn-xs btn-info"><i class="fas fa-pencil-alt"></i> Edit</a>

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
                                  Yakin data Sporadik {{$data->no_skt}} ingin dihapus?
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                  <form action="/sporadik/{{$data->id}}" method="POST">
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