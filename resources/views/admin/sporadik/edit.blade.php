@extends('layoutadmin.master')
@section('title', 'Edit Data Sporadik')
@section('judul', 'Edit Data Sporadik')
@section('content')
<section class="content">
    <div class="card col-8 m-auto">
        <div class="card-header">
            <h3 class="card-title">
                Form Edit Data
            </h3>
        </div>
        <div class="card-body">
            <form action="/sporadik/{{$spo->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="no_skt">Nomor SKT</label>
                    <input type="text" name="no_skt" value="{{$spo->no_skt}}" readonly class="form-control" id="no_skt" placeholder="Nomor SKT">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pilih Nama Pemilik</label>
                    <select name="masyarakat" class="form-control" id="masyarakat">
                        <option value="">-Pilih Nama Pemilik-</option>
                        @foreach ($mas as $data)
                            <option value="{{$data->id}}" {{ $data->id == $spo->masyarakat->id ? 'selected' : '' }}>
                                {{$data->nm_mas}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="ukt_timur">UKT Timur</label>
                    <input type="text" name="ukt_timur" value="{{$spo->ukt_timur}}" class="form-control" id="ukt_timur" placeholder="UKT Timur">
                </div>
                <div class="form-group">
                    <label for="ukt_barat">UKT Barat</label>
                    <input type="text" name="ukt_barat" value="{{$spo->ukt_barat}}" class="form-control" id="ukt_barat" placeholder="UKT Barat">
                </div>
                <div class="form-group">
                    <label for="ukt_selatan">UKT Selatan</label>
                    <input type="text" name="ukt_selatan" value="{{$spo->ukt_selatan}}" class="form-control" id="ukt_selatan" placeholder="UKT Selatan">
                </div>
                <div class="form-group">
                    <label for="ukt_utara">UKT Utara</label>
                    <input type="text" name="ukt_utara" value="{{$spo->ukt_utara}}" class="form-control" id="ukt_utara" placeholder="UKT Utara">
                </div>
                <div class="form-group">
                    <label for="kepala_desa">Nama Kepala Desa</label>
                    <input type="text" name="kepala_desa" value="{{$spo->kepala_desa}}" class="form-control" id="kepala_desa" placeholder="Nama Kepala Desa">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pilih Nama Petugas</label>
                    <select name="petugas" class="form-control" id="petugas">
                        <option value="">-Pilih Nama Petugas-</option>
                        @foreach ($pet as $data)
                            <option value="{{$data->id}}" {{ $data->id == $spo->petugas->id ? 'selected' : '' }}>
                                {{$data->nm_petugas}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="/sporadik" class="btn btn-secondary">Batal</a>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
@endsection
