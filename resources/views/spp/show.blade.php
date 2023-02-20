
@extends('template.master')

@section('judul')
    <h1>Halaman Detail</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Spp</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="outlet/create" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputid">Tahun</label>
                    <input type="integer" name="tahun" class="form-control" id="inputtahun" placeholder="Masukan Tahun" value="{{ $spps->tahun }}" disabled  >
                  </div>
                  <div class="form-group">
                    <label for="inputNamaKelas">Nominal</label>
                    <input type="text" name="nominal" class="form-control" id="inputnominal" placeholder="Masukan Nominal" value="{{ $spps->nominal }}" disabled>
                  </div>
                </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <a class="btn btn-primary" href="/spp">Back</a>
                </div>
              </form>
            </div>
@endsection