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

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/filme/adicionar" method="POST" class="form-group">

            @csrf 
            <label for="title">Nome do Filme</label>
            <input type="text" name="title" class="form-control">
            <button type="submit" class="btn btn-primary">Adicionar Filme</button>
        </form>
    </div>
</body>
</html>