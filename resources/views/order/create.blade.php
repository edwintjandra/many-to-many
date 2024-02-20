<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        nama pembeli:
        <input type="tanggal_order" name="nama_pembeli">
        <br>
        tanggal order:
        <input type="tanggal_order" name="tanggal_order">
        <br>
        status order:
        <input type="status_order" name="status_order">
        <button>submit</button>
    </form>
    
</body>
</html>