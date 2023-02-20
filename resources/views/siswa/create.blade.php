@extends('template.master')

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="input_nisn">NISN</label>
                    <input type="number" name="nisn" class="form-control" id="input_nisn" placeholder="Silahkan Masukan Nisn">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIS</label>
                    <input type="number" name="nis" class="form-control" id="input nis" placeholder="Silahkan Masukan Nis">
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text"  name="nama" class="form-control" id="input nama" placeholder="Silahkan Masukan Nama">
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="input alamat" placeholder="Silahkan Masukan Alamat">
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No_Telp</label>
                    <input type="number" name="no_telp" class="form-control" id="input no telp" placeholder="Enter No Telp">
                </div>
                  <div class="form-group">
                  <label>Nama Kelas</label>
                    <select class="form-control" name="kelas_id" id="kelas_id">
                    <option disable selected value=""> --Silahkan Pilih Kelas-- </option>
                      @forelse ($kelas as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                      @empty
                        <option value="" disabled>Data Kosong</option>
                      @endforelse
                    </select>
                  </div>
                  @error('kelas_id')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                  @enderror

                  <div class="form-group">
                  <label>Jumlah Nominal</label>
                <select class="form-control" name="spps_id" id="spps_id">
                 <option disabled selected>Silahkan Pilih Nominal</option>
                 @forelse ($spps as $item)
                    <option value="{{ $item->id }}">{{ $item->nominal }}</option>
                  @empty
                    <option value="" disabled>Data Kosong</option>
                  @endforelse
                 </select>
                  </div>
                  @error('spps_id')
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