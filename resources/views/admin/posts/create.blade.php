<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar novo post</h1>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <input type="text" name="title" id="title" placeholder="Título">
        <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>