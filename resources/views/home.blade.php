@extends('layout.main')
@section('content')
    <div class="container">
        <div class="card-col d-flex flex-row gap-3">
            @foreach ($berita as $data)
                <div class="card" style="; width: 18rem;">
                    <img src="/gambar/{{$data->gambar}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->judul}}</h5>
                        <p class="card-text">{{Str::substr($data->isi, 0, 200)  }}...</p>
                        @if ($data->rilis == 1)
                            <a href="{{ route('berita.show',$data->id) }}" class="btn btn-primary">Tonton</a>
                            @else
                            <a href="{{ route('berita.show',$data->id) }}" class="btn btn-warning">Sabar dulu</a>
                        @endif

                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
