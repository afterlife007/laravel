<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session('msg'))
        <p>{{session('msg')}}</p>
    @endif

    <a href="{{route('posts.create')}}"><p>Cadastrar Post</p></a>
    <hr>
    @foreach ($posts as $post)
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <a href="{{route('posts.show', $post->id)}}">Ver</a>
    <a href="{{route('posts.edit', $post->id)}}">edit</a>
    <form style="margin-top: 10px" action="{{route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
    @endforeach
    
</body>
</html>