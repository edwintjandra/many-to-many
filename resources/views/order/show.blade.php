<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $order->nama_pembeli }}</h1>
    <p>{{ $order->tanggal_order }}</p>
    <p>{{ $order->status_order }}</p>

    @foreach ($order->products as $product)
        <li>{{ $product->nama_produk }}, {{ $product->harga }}</li>
    @endforeach

    <form action="{{ route('order.addProduct') }} " method="POST">
        @csrf
        id produk:
        <input type="hidden" value="{{ $order->id }}" name="orderId">
        <input type="text" name="produkId">
        <button>submit</button>
    </form>
    
</body>
</html>