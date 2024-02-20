<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>{{ $post->judul }}</h1>
    
    category list
    @foreach ($post->categories as $category)
        <li>{{ $category->nama }}</li>
    @endforeach

    <form method="POST" action="{{route('posts.category',$post->id)}}">
        @csrf
        <select name="categoryId" id="">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nama }}</option>
            @endforeach
        </select>

        <button>submit</button>
    </form>

</body>
</html>