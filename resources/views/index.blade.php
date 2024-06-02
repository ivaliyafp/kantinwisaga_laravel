<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kantin Sekolah')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .welcome-container {
            text-align: center;
            margin-top: 20px;
        }
        .background-image {
            position: relative;
            background-image: url('{{ asset('imgs/download.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 800px;
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
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin: 10px;
            text-align: center;
            width: 200px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card img {
            border-radius: 8px;
            width: auto;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .card-title {
            font-size: 20px;
            margin: 10px 0;
        }
        .card-text {
            font-size: 24px;
            color: #555;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="{{ asset('imgs/kantin.jpeg') }}" width="50" height="40" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('menu') }}">menu</a>
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

    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
