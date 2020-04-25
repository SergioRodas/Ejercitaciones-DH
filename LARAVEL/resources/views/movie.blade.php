@extends('layout.default')
@section('content')
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Película: </h1>

    <div style="padding-top:35px;">
      <ul>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">Nombre: {{$pelicula->title}}</li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">Rating: {{($pelicula->rating!= '' ? $pelicula->rating:"Aún no tiene rating")}}</li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">Premios: {{$pelicula->awards}}</li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">Género: {{($pelicula->genre!= '' ? $pelicula->genre->name:"No tiene")}}</li>
          <details style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">
            <summary>Actores que participan ↓</summary>
              @forelse ($pelicula->actors as $actor)
              <p>{{$actor->getNombreCompleto()}}<p>
              @empty <p>Esta película no tiene actores asociados</p>
            @endforelse
          </details>
      </ul>
    </div>

    <a href="/genres" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right;">←Volver a los Géneros</a>

@endsection
