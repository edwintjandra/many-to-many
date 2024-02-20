<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <select name="categoryId" id="">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nama }}</option>
            @endforeach
        </select>
        <br>
        judul postingan:
        <input type="text" name="judul">
        <br>
        konten postingan:
        <textarea name="konten" id="" cols="30" rows="10"></textarea>

        <button>submit</button>
    </form>
    
</body>
</html>