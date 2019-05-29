@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Filmes</h1>

        <a class="btn btn-primary" role="button" href="/filme/adicionar">
            + Novo Filme
        </a>

        <ul class="list-group">
            @foreach($filmes as $filme)
                <li class="list-group-item">
                    <a href="/filmes/{{ $filme->id }}">
                    {{ $filme->titleComRating() }}
                    </a>
                    <a href="/filme/editar/{{ $filme->id }}" class="btn btn-sm btn-light">Editar</a>
                    <a href="/filme/excluir/{{ $filme->id }}" class="btn btn-sm btn-secondary">Excluir</a>
                </li>
            @endforeach
        </ul>

        {{ $filmes->links() }}
    </div>
@endsection