<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        @php
            use App\Models\Berita;
            $berita = Berita::all();
        @endphp
        <!-- Responsive navbar-->
        @include('partials.navbar')
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Selamat Datang!</h1>
                    <p class="lead mb-0">Website Berita Anime</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="gambar/jujutsukaisen.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Februari 30, 2022</div>
                            <h2 class="card-title">Jujutsu Kaisen</h2>
                            <p class="card-text">Jujutsu Kaisen adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha sejak Maret 2018, dan telah diterbitkan menjadi dua puluh volume tankōbon per Agustus 2022.</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            @foreach ($berita as $data)
                                 <div class="card mb-4" style="; ;">
                                    <img src="/gambar/{{$data->gambar}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="small text-muted">Januari 19, 2022</div>
                                        <h5 class="card-title">{{$data->judul}}</h5>
                                        <p class="card-text">{{Str::substr($data->isi, 0, 200)  }}</p>
                                        @if ($data->rilis == 1)
                                            <a href="#" class="btn btn-primary">Tonton</a>
                                         @else
                                            <a href="#" class="btn btn-warning">Sabar dulu</a>
                                         @endif

                                    </div>
                                </div>
                            @endforeach
                            <!-- Blog post-->
                            <div class="card mb-4" style="; ">
                                <a href="#!"><img class="card-img-top" src="gambar/fireforce.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Juli 12, 2022</div>
                                    <h2 class="card-title h4">Fire Force</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            @foreach ($berita as $data)
                                 <div class="card mb-4" style="; ;">
                                    <img src="/gambar/{{$data->gambar}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="small text-muted">Mei 20, 2022</div>
                                        <h5 class="card-title">{{$data->judul}}</h5>
                                        <p class="card-text">{{Str::substr($data->isi, 0, 200)  }}</p>
                                        @if ($data->rilis == 1)
                                            <a href="#" class="btn btn-primary">Tonton</a>
                                         @else
                                            <a href="#" class="btn btn-warning">Sabar dulu</a>
                                         @endif

                                    </div>
                                </div>
                            @endforeach
                            <!-- Blog post-->
                            <div class="card mb-4" style="; ">
                                <a href="#!"><img class="card-img-top" src="gambar/namamu.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Desember 12, 2022</div>
                                    <h2 class="card-title h4">Kimi No Nawa</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Cari</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Genre</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="https://youtu.be/dQw4w9WgXcQ">Slice of Life</a></li>
                                        <li><a href="https://youtu.be/dQw4w9WgXcQ">Shounen</a></li>
                                        <li><a href="https://youtu.be/dQw4w9WgXcQ">Action</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="https://youtu.be/dQw4w9WgXcQ">Mecha</a></li>
                                        <li><a href="https://youtu.be/dQw4w9WgXcQ">Sci-fi</a></li>
                                        <li><a href="https://youtu.be/dQw4w9WgXcQ">Comedy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">YTTA</div>
                        <div class="card-body">YNTKTS</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        @include('partials.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
