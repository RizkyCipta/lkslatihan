@extends('layout.main')
@section('content')
    <header class="mb-4">
        <!-- Post title-->
        <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
        <!-- Post meta content-->
        <div class="text-muted fst-italic mb-2">Posted on January 1, 2022 by Rizky Cipta</div>
        <!-- Post categories-->
        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Anime</a>
        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Weaboo</a>
    </header>
    <div class="container mt-5">
        <img src="../gambar/{{ $data->gambar }}" class="img-fluid" alt="...">
        <h1>{{ $data->judul }}</h1>
        <p>{{ $data->isi }}</p>

    </div>


@endsection
