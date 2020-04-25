<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actor;
use App\Genre;

class Movie extends Model
{
  protected $guarded = [];

  public function genre()
  {
    return $this->belongsTo(Genre::class, "genre_id");
  }

  public function actors()
  {
    return $this->belongsToMany(Actor::class, "actor_movie", "movie_id", "actor_id");
  }
}
