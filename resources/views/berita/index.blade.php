@extends('layout.main')
@section('content')
    <h1>Berita</h1>
    <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" style="width: 10%">No</th>
            <th scope="col" style="width: 30%">Judul</th>
            <th scope="col" style="width: 40%">Isi</th>
            <th scope="col"style="width: 20%">Gambar</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($berita as $no => $data)
        <tr>
          <th scope="row">{{ $no+1 }}</th>
          <td>{{ $data->judul }}</td>
          <td>{{ Str::substr($data->isi, 0, 100)  }}...</td>
          <td><img src="gambar/{{ $data->gambar }}" width="30%" alt=""></td>
          <td>
            <div class="d-flex flex-row gap-3">
                <a href="{{ route('berita.show',$data->id) }}" class="btn btn-primary">Tonton</a>
                <a href="{{ route('berita.edit',$data->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('berita.destroy',$data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </td>
        </tr>
        @endforeach
        </tbody>
      </table>
@endsection
