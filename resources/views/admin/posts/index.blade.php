<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('post.create')}}"><p>Cadastrar Post</p></a>
    <hr>
    @foreach ($posts as $post)
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    @endforeach
    
</body>
</html>