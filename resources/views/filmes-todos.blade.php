<ul>
    @foreach($filmes as $filme)

    <li>{{ $filme->titleComRating() }}</li>
    
    @endforeach
</ul>