<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Movie;

class Actor extends Model
{
  protected $guarded = [];

  public function getNombreCompleto()
  {
    $nombre = $this->first_name;
    $apellido = $this->last_name;
    return $nombre . " " . $apellido;
  }

  public function getPeliculaFavorita($id)
  {
    $peliculaFavorita = DB::table('actors')
              ->leftjoin('movies', 'favorite_movie_id', '=', 'movies.id')
              ->select("title")
              ->where('actors.id', 'LIKE', "$id")
              ->value('title');
                return $peliculaFavorita;
            }

  public function movies()
  {
    return $this->belongsToMany(Movie::class, "actor_movie", "actor_id", "movie_id");

  }
}
