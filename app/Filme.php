<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'movies';
    protected $primaryKey = 'id';

    public function titleComRating() {
        return $this->title . ' (' . $this->rating . ') ';
    }
}
