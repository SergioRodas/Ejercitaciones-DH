<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class PeliculasController extends Controller
{

  public function listado()
  {

    $peliculas = Movie::all();

    // ↓Ejercicio 3 de Colecciones, CLASE 6

    /*foreach ($todasLasPeliculas as $pelicula) {
      $plucked = $pelicula->genre->pluck('name', 'id');
      $arrayGeneros = $plucked->toArray();
      dd($arrayGeneros);
    }*/

    $peliculasTitle = $peliculas->sortBy('title');
    $peliculasLength = $peliculas->sortBy('length');
    $peliculasShuffle = $peliculas->shuffle();
    $peliculasFilter = $peliculas->filter(function($pelicula)
    {
      return $pelicula->length > 90 || $pelicula->rating > 5;
    });

    $premiosPorMinuto = $peliculas->map(function ($pelicula)
    {
      $ppm = ($pelicula->awards == 0 || $pelicula->length == 0) ? 0:$pelicula->awards/$pelicula->length;
      return $ppm;
    });

    for ($i = 1; $i <= count($premiosPorMinuto); $i++)
     {
    $ppm[$i] = $premiosPorMinuto[$i-1];
    }
    $vac = compact('peliculas', 'ppm');
      return view('peliculas', $vac);
  }

    public function buscarPeliculaId($id)
    {
      $peliculas = Movie::find($id);
      if (isset($peliculas))
     {
        return view('peliculas',['peliculas' => [$peliculas]]);
      } else
     {
        return "No se encontraron resultados";
      }

    }
    public function buscarPeliculaNombre($nombre)
    {
      $nombre1 = strtolower($nombre);
      $peliculas = Movie::where("title", "LIKE", "$nombre")
         ->orderby("id")
         ->get();
      $vac = compact("peliculas");
         return view('peliculas', $vac);
          }
      public function nuevaPelicula()
      {
          $generos = Genre::all();
          $vac = compact('generos');
        return view('nuevaPelicula', $vac);
      }
      public function agregarPelicula(Request $request)
      {
      $this->validate($request, [
        'title'=>'required|max:255|unique:movies',
        'rating'=>'required|numeric|lte:10|gte:1',
        'awards'=>'required|numeric|gte:0',
        'length'=>'required|numeric|lte:400|gte:1',
        'day'=>'required',
        'month'=>'required',
        'year'=>'required',
        'genre'=>'required'
      ],[
        'required' => "El campo :attribute es requerido",
        'lte' => "El campo :attribute debe ser menor o igual a 10",
        'gte' => "El campo :attribute debe ser mayor a :value",
        'numeric' => "El campo :attribute debe ser un número",
        'max' => "El campo :attribute no debe exceder los 255 caracteres"
      ]);
      }

      public function show($id)
      {
        $pelicula = Movie::find($id);
        if (isset($pelicula))
        {
          $vac = compact('pelicula');
          return view('Movie', $vac);

        } else {
          return "No se encontró una película con esa id";
        }
      }

      public function showActors($id)
      {
        $pelicula = Movie::find($id);
        if (isset($pelicula))
        {
          $vac = compact('pelicula');

          $actores = $pelicula->actors;

/*          $actoresRequisitos = $pelicula->actors->where(function ($actor)
        {
          return $actor->rating > 7 && $actor->movies->count()>=5;
        });
*/

          $vac2 = compact('actores');


          return view('Pelicula', $vac, $vac2);

        } else {
          return "No se encontró una película con esa id";
        }
      }

}
