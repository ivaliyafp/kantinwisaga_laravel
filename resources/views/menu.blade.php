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
            font-family: Arial, sans-serif;
        }

        section {
            padding: 60px 0;
        }

        .section-heading {
            text-align: center;
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
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .background-image-content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
        }

        .menu-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 20px 0;
        }

        .menu-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 20px;
            border-radius: 10px;
        }

        .menu-item h5 {
            margin: 0 0 10px;
            color: #007bff;
        }

        .menu-item p {
            margin: 5px 0;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .card {
            flex: 1 1 calc(25% - 20px);
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card img {
            width: 270px;
            height: 300px;
            object-fit: cover;
            border-radius: 20px;
            margin-bottom: 20px;
        }

        .card p {
            margin: 5px 0;
        }

        .card button {
            background-color: #A67B5B;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .card button:hover {
            background-color: #74512D;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .card {
                flex: 1 1 calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .card {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body data-spy="scroll" data-target="#navbar-example" data-offset="70">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="{{ asset('imgs/kantin.jpeg') }}" width="50" height="40" class="d-inline-block align-top" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/halaman/utama">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Menu <span class="sr-only">(current)</span></a>
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
        <h1>Welcome to Kantin Wisaga</h1>
    </div>
</div>

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Menu</h1>
    <a href="{{ route('menuitems.create') }}" class="btn btn-primary">Tambah Menu</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menuitems as $menuitem)
                <tr>
                    <td>{{ $menuitem->name }}</td>
                    <td>{{ $menuitem->description }}</td>
                    <td>{{ $menuitem->price }}</td>
                    <td>{{ $menuitem->stock }}</td>
                    <td>
                        <a href="{{ route('menuitems.edit', $menuitem) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('menuitems.destroy', $menuitem) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<div class="menu-container">
    <h1 class="section-heading">Menu Restoran</h1>
    <div class="card-container">
        <div class="card" onclick="openModal('bakso')">
            <img src="{{ asset('images/item/bakso (1).jpeg') }}" alt="Bakso Bakar">
            <p>Bakso Bakar</p>
            <p>Harga: Rp. 2500</p>
            <button>Buy</button>
        </div>
        <div class="card" onclick="openModal('tahu')">
            <img src="{{ asset('images/item/makanan (2).jpeg') }}" alt="Dimsum">
            <p>Dimsum</p>
            <p>Harga: Rp. 2000</p>
            <button>Buy</button>
        </div>
        <div class="card" onclick="openModal('sushi')">
            <img src="{{ asset('images/item/makanan (3).jpeg') }}" alt="Sushi">
            <p>Sushi</p>
            <p>Harga: Rp. 3000</p>
            <button>Buy</button>
        </div>
        <div class="card" onclick="openModal('risol')">
            <img src="{{ asset('images/item/download (4).jpeg') }}" alt="Risol">
            <p>Risol</p>
            <p>Harga: Rp. 3000</p>
            <button>Buy</
