<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        nama_produk
        <input type="text" name="nama_produk">
        <br>
        stok_produk
        <input type="number" name="stok_produk">
        <br>
        harga
        <input type="number" name="harga">

        <button>submit</button>
    </form>
</body>
</html>