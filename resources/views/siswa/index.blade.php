@extends('template.master')

@section('content')
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Halaman Data Siswa</h3>
    </div>
      <div class="card-body">
      <div class="card-body">
        <a href="{{ route('siswa.create') }}" class="btn btn-primary">
          @csrf
          <i class="fas fa-plus"></i>
          Tambah Data Siswa
        </a>
      </div>
        <table id="example2" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nisn</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Kelas Id</th>
            <th>Spp Id</th>
          </tr>
          </thead>
        </table> 
        <tbody>
          @forelse($siswa as $siswa)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $spp->nisn }}</td>
          <td>{{ $spp->nis }}</td>
          <td>{{ $spp->nama }}</td>
          <td>{{ $spp->alamat }}</td>
          <td>{{ $spp->no_telp }}</td>
          <td>{{ $spp->kelas_id }}</td>
          <td>{{ $spp->spp_id }}</td>
          <td>
          <form action="{{ route ('siswa.destroy', [$siswa->id])}}" method="POST">
              <a class="btn btn-info mr-3" href="siswa/{{$siswa->id}}">
              <i class="fas fas fa-exclamation-circle"></i> Detail</a> 
              <a class="btn btn-warning mr-3" href="siswa/{{$siswa->id}}/edit">
              <i class="fas fa-edit	"></i> Edit</a>
              <form action="/siswa/{{$siswa->id}}" method="POST">
            @csrf
            @method('DELETE')
           <button type="submit" class="btn btn-danger" value="Delete">
           <i class="far fa-trash-alt"></i> 
           Delete
          </button>
          </form>
            </td>
         </tr>
         @empty
         <tr>
          <td>Data Masih Kosong</td>
        </tr>

        @endforelse
      </table>
    </div>
    <!-- /.card-body -->
  
@endsection