<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Director extends Model
{
  protected $guarded = [];

  public function movies()
  {
    return $this->belongsTo(Movie::class, "director_id");
  }
}
