<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Sekolah</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            position: relative;
        }
        section {
            padding: 60px 0;
        }
        .section-heading {
            margin-bottom: 40px;
        }
        .background-image {
            position: relative;
            background-image: url('{{ asset('imgs/download.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .background-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity as needed */
            z-index: 1;
        }
        .background-image-content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#navbar-example" data-offset="70">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="{{ asset('imgs/kantin.jpeg') }}" width="50" height="40" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Home') }}">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">menu <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <nav class="navbar navbar-light bg-light">
  <form class="form-inline ml-auto">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
  </div>
</nav>
<div class="background-image">
    <div class="background-image-content">
        <h1>Welcome to Kantinwisaga</h1>
    </div>
</div>
    <div class="Menu">
        <h1>Menu Restoran</h1>

        @foreach ($menuItems as $items)
            <section>
                @foreach ($items as $item)
                    <div class="card mb-4">
                        <!-- Pastikan properti yang digunakan sesuai dengan struktur data Anda -->
                        <img class="card-img-top" src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->nama_makanan }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_makanan }}</h5>
                            <!-- Sesuaikan properti yang digunakan dengan struktur data Anda -->
                            <p class="card-text">{{ $item->deskripsi }}</p>
                            <p class="card-text">Harga: {{ $item->harga_makanan }}</p>
                            <p class="card-text">Jumlah: {{ $item->jumlah_makanan }}</p>
                            <p class="card-text">Stok: {{ $item->stok }}</p>
                        </div>
                    </div>
                @endforeach
            </section>
        @endforeach
    </div>

    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
