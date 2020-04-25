<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{

  public function listado()
  {
    $generos = Genre::all();
    $vac = compact('generos');
    return view('genres', $vac);
  }

  public function show($id)
  {
    $genero = Genre::find($id);
    if (isset($genero))
    {
      $vac = compact('genero');
      return view('movies', $vac);

    } else {
      return "No se encontro un género con esa id";
    }
  }

}
