<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmes</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">

        <p>Filme: {{ $filme->title }}</p>
        <p>Rating: {{ $filme->rating }} stars</p>
        <p>Duração: {{ $filme->length }} min</p>

        @isset($filme->genero)
        <p>Genêro: {{ $filme->genero->nameComRaking() }}</p>
        @else
        <p>Genêro: Sem cadastro</p>
        @endisset

        {{ $filme->atores }}

    </div>
</body>
</html>