@extends('layout.default')
@section('content')
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Películas: </h1>
    <div style="padding-top:35px;">
      <ul>
        @forelse ($peliculas as $pelicula)
          <a href="/pelicula/{{$pelicula->id}}" style="margin-right:50px;text-decoration: none; color: crimson;"><li style="font-weight: bold; font-size: 32px; margin-left:90px; color: crimson;">{{$pelicula->title}}</li></a>
          <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;">Premios por minuto: {{$ppm[$pelicula->id]}}</li>

      @empty
        <p>No se encontraron peliculas con ese nombre</p>
      @endforelse
      </ul>
    </div>
    <a href="/peliculas" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right; margin-bottom:20px; margin-bottom:20px;">Volver al principio</a>

@endsection
