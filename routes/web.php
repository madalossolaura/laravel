<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function (){
    echo 'Hello WORLD';
});

Route::get('/saudacoes/{nome}', function($nome) {
    echo 'olá ' . $nome;
});

Route::get('/multiplicao/{numero1}/{numero2?}', function ($numero1, $numero2 = null) {
    if ($numero2 != null) {
        echo $numero1 * $numero2;
    } else {
        echo 'precisa do numero 2';
    }
});

Route::get('/view', function(){
    return view('minhaPrimeira');
});

Route::get('view-parametro/{nome}', function($nome){
    return view('minhaSegunda')->with('nomeBlade', $nome);
});

Route::get('entrar/{idade}', function($idade){
    if ($idade >= 18) {
        return view('possoEntrar')->with('parametro', 'bem vindo');
    } else {
        return view('possoEntrar')->with('parametro', 'vc nao tem idade para entrar');
    }
});

Route::get('/filmes', 'FilmesController@exibirTodos');