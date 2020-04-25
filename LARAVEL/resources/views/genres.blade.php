@extends('layout.default')
@section('content')
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Géneros: </h1>
    <div style="padding-top:5px;">
      <ul>

      @forelse ($generos as $genero)
        <a href="/genre/{{$genero->id}}" style="margin-right:50px;text-decoration: none; color: crimson;"><li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">{{$genero->name}}</li></a>

      @empty <p>No se encontraron resultados</p>

      @endforelse
      </ul>
    </div>

    <a href="/genres" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right; margin-bottom:20px;">Volver al principio</a>

@endsection
