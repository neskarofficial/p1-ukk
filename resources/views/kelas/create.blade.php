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
                <select class="form-control" name="kelas_id" id="">
                 <option disable selected> --Silahkan Pilih Kelas-- </option>
                 <option value="RPL">RPL</option>
                 <option value="TKJ">TKJ</option>
                 <option value="TBSM">TBSM</option>
                 <option value="TKRO">TKRO</option>
                 <option value="DPIB">DPIB</option>
                 <option value="TEI">TEI</option>
                 <option value="TP">TP</option>
                </select>
                  </div>
                  <div class="form-group">
                  <label>Kompetensi Keahlian</label>
                <select class="form-control" name="kompetensi_keahlian" id="kompetensi keahlian">
                 <option disabled selected>Silahkan Kompetensi Keahlian</option>
                 <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                 <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                 <option value="Teknik Berbasis Sepeda Motor">Teknik Berbasis Sepeda Motor</option>
                 <option value="Teknik Kendaran Ringan Otomotif">Teknik Kendaran Ringan Otomotif</option>
                 <option value="Desain Pembangunan IB">Desain Pembangunan IB</option>
                 <option value="Teknik Elektronika">Teknik Elektronika</option>
                 </select>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection