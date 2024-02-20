<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @foreach ($orders as $order)
    <li>{{ $order->id}}, pembeli: {{ $order->nama_pembeli }}, <a href="{{route('order.show',$order->id)}}">show more</a></li>
        
    @endforeach

</body>
</html>