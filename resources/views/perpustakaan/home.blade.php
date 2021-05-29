<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Perpustakaan</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('daftarbuku') }}">Daftar Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('pengunjung') }}">Data Pengunjung</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('data_peminjam') }}">Data Peminjam</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <h1 class="text-center mt-3">Selamat Datang <br> Perpustakaan Online</h1>
      
      <div class="container">
        <div class="row justify-content-center">
          @foreach ($buku as $book)        
            <div class="col-md-4">
              <img src="{{ 'img' }}/{{ $book->gambar }}" width="290" height="">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h3 class="card-text">{{ $book->nama_buku }}</h3>
                  <p>{{ $book->nama_pengarang }}</p>
                </div>
              </div>
            </div>
        @endforeach
        </div>
      </div>
        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>