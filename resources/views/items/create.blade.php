<!DOCTYPE html>
<html>
<head>
    <title>Tambah item kantin</tittle>
</head>
<body>
    <h1>Tambah item baru</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="desription">Deskripsi:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <label for="price">Harga:</label>
            <input type="text" id="price" name="price">
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>