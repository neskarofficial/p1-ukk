@extends('template.master')

<!-- @section('judul')
    <h1>Data</h1> -->
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/siswa" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputid">Nisn</label>
                    <input type="text" name="nisn" class="form-control" placeholder="Nisn">
                  </div>
                  <div class="form-group">
                    <label for="inputNamaKelas">Nis</label>
                    <input type="text" name="nis" class="form-control" placeholder="Nis">
                  </div>
                  <div class="form-group">
                    <label for="inputJurusan">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label for="inputJurusan">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                  </div>  
                  <div class="form-group">
                    <label for="inputJurusan">No_telp</label>
                    <input type="number" name="no_telp" class="form-control" placeholder="No_telp">
                  </div>
                  <div class="form-group">
                    <label>Pilih Kelas</label>
                    <select name="kelas_id" id="kelas_id">
                    <option value="" disabled>Silahkan Pilih Kelas</option>
                    <option value="XII RPL 3">XII RPL 3</option>
                    <option value="XII RPL 2">XII RPL 2</option>
                    <option value="XII RPL 1">XII RPL 1</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Jumlah Nominal</label>
                      <select name="spps_id" id="spps_id">
                      <option value="" disabled>Silahkan Pilih Nominal</option>
                      <option value="2jt">2000000</option>
                      <option value="3jt">300000</option>
                      <option value="4jt">4000000</option>
                 </select>
                 <!-- <button type="simpan" class="btn btn-primary">Simpan</button> -->
                 </from>
                 </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection