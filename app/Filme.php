<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'movies';
    protected $primaryKey = 'id';

    public function titleComRating() 
    {
        return $this->title . ' (' . $this->rating . ') ';
    }

    public function genero()
    {
        return $this->hasOne(Genero::class,'id', 'genre_id');
    }

   /* public function atores()
    {
        return $this->belongsToMany(Ator::class, 'actor_movie', 'actor_id', 'movie_id';
    }*/
}
