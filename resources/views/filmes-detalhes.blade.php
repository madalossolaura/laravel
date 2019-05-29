@extends('layouts.app')

@section('content')
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
@endsection