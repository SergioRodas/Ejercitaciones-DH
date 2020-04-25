@extends('layout.default')
@section('content')
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Película: {{$pelicula->title}} </h1>
    <div style="padding-top:35px;">
      <ul class="text-primary">
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;">Nombre: {{$pelicula->title}}</li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;">Rating: {{($pelicula->rating!= '' ? $pelicula->rating:"Aún no tiene rating")}}</li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;">Premios: {{$pelicula->awards}}</li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;">Género: {{($pelicula->genre!= '' ? $pelicula->genre->name:"No tiene")}}</li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px;">Duración: {{$pelicula->length!='' ? $pelicula->length:"No especificada"}}</li>

      </ul>
          <details style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">
            <summary>↓ Actores que participan ↓</summary>
              @forelse ($actores as $actor)
                {{--*Así se resuelve el ejercicio que pedía mostrar los actores que tuvieran mas de 5 películas. Como ningún actor cumple ese requisito, lo dejo comentado*--}}
              {{--<p class="text-danger font-italic pt-2 ml-5">{{($actor->movies->count()> 5 ? $actor->getNombreCompleto():"")}}<p> --}}
              <p class="text-danger font-italic pt-2 ml-5">{{$actor->getNombreCompleto()}}<p>
              @empty <p>Esta película no tiene actores asociados</p>
            @endforelse
          </details>
    </div>
    <a href="/peliculas" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right; margin-bottom:20px; margin-bottom:20px;">←Listado de películas</a>


@endsection
