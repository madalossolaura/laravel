<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmesController extends Controller
{
    public function exibirTodos() 
    {
        //$filmes = Filme::all();
        //$filmes = Filme::orderBy('title', 'DESC')->get();
        //$filmes = Filme::where('title', 'like', 'A%')->get();
        //$filmes = Filme::where('title', 'like', '%A')
              //  ->where('rating', '>', '2')
              //  ->orderBy('rating', 'DESC')
              //  ->orderBy('title', 'DESC')
              //  ->get();
        $filmes = Filme::paginate(5);      

        return view('filmes-todos')->with('filmes', $filmes);
    }

    public function exibirDetalhe($id)
    {
        $filme = Filme::find($id);
        return view('filmes-detalhes')
            ->with('filme', $filme);
    }

    public function adicionarFilme()
    {
        return view('filme-adicionar');
    }

    public function salvarFilme(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20|unique:movies'
        ]);

        $filme = new Filme;
        $filme->title = $request->input('title');
        $filme->rating = 1;
        $filme->release_date = now();
        $filme->save();

        return redirect('/filmes');
    }
}
