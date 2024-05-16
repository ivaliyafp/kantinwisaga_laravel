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
    </style>
</head>
<body data-spy="scroll" data-target="#navbar-example" data-offset="70">

<nav id="navbar-example" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Kantin Wisaga</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#section1">Bakso</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section2">Makanan Goreng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section3">Dimsum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section4">Sushi</a>
            </li>
        </ul>
        <form class="form-inline ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container">
    @foreach ($categories as $category => $items)
    <section id="section{{ $loop->index + 1 }}">
        <h2 class="section-heading">{{ $category }}</h2>
        @foreach ($items as $item)
        <div class="card mb-4">
            <img class="card-img-top" src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <p class="card-text">{{ $item->description }}</p>
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
