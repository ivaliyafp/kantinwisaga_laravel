<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
</head>
<body>
    <h1>menu</h1>
    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama_makanan">Nama Makanan:</label>
        <input type="text" id="nama_makanan" name="nama_makanan" required><br><br>

        <label for="jenis_makanan">Jenis Makanan:</label>
        <input type="text" id="jenis_makanan" name="jenis_makanan" required><br><br>

        <label for="harga_makanan">Harga Makanan:</label>
        <input type="number" id="harga_makanan" name="harga_makanan" required><br><br>

        <label for="jumlah_makanan">Jumlah Makanan:</label>
        <input type="number" id="jumlah_makanan" name="jumlah_makanan" required><br><br>

        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" required><br><br>

        <label for="gambar">Gambar:</label>
        <input type="file" id="gambar" name="gambar" accept="image/*"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
