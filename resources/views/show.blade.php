<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>{{ $item->name }}</h2>
    <p>Harga: Rp{{ number_format($item->price, 2) }}</p>
    <p>Deskripsi: {{ $item->description }}</p>
    <a href="{{ route('items.index') }}">Kembali ke Daftar Produk</a>
</body>
</html>