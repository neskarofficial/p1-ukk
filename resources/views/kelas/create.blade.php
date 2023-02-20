@extends('template.master')

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('kelas.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Kelas</label>
                    <input type="text" name="nama_kelas" id="nama_kelas" class="form-control">
                  </div>
                  @error('nama_kelas')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label>Kompetensi Keahlian</label>
                    <select class="form-control" name="kompetensi_keahlian" id="kompetensi_keahlian">
                      <option disabled selected>Silahkan Kompetensi Keahlian</option>
                      <option value="RPL">Rekayasa Perangkat Lunak</option>
                      <option value="TKJ">Teknik Komputer dan Jaringan</option>
                      <option value="TBSM">Teknik Berbasis Sepeda Motor</option>
                      <option value="TKRO">Teknik Kendaran Ringan Otomotif</option>
                      <option value="DPIB">Desain Pembangunan Informasi Bangunan</option>
                      <option value="TEI">Teknik Elektronika Industri</option>
                    </select>
                  </div>
                  @error('kompetensi_keahlian')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                  @enderror
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection