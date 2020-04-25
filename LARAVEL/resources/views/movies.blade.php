@extends('layout.default')
@section('content')
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Películas del género: {{$genero->name}} </h1>
    <div style="padding-top:35px;">
      <ul>

        @forelse ($genero->movies as $pelicula)
      <a href="/movie/{{$pelicula->id}}" style="margin-right:50px;text-decoration: none; color: crimson;"><li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">{{$pelicula->title}}</li></a>

    @empty <p>Este género no tiene películas</p>

      @endforelse
      </ul>
    </div>
    <a href="/genres" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right; margin-bottom:20px; margin-bottom:20px;">Volver al principio</a>

@endsection
