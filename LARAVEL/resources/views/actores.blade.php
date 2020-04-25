@extends('layout.default')
@section('content')
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Actores: </h1>
    <h2 style="text-align:center; margin-top:50px">Buscar actores</h2>

    <form id="buscarActor" action="/actores/buscar" name="buscarActor" method="POST">
      @csrf
        <div style="text-align:center;">
            <label for="name">Nombre del actor</label>
            <input type="text" name="name" id="name"/>
        </div>
        <div style="text-align:center; margin-top: 20px; margin-bottom: 50px;">
        <input type="submit" value="Buscar Actor" name="submit"/>
      </div>
    </form>
    <div style="padding-top:5px;">
      <ul>
      @forelse ($actores as $actor)
        <a href="/actor/{{$actor->id}}" style="margin-right:50px;text-decoration: none; color: crimson;"><li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">{{$actor->getNombreCompleto()}}</li></a>
      @empty <p>No se encontraron coincidencias</p>

      @endforelse
      </ul>
    </div>
    <div class="ml-5">
      {{$actores->links()}}
    </div>


    <a href="/actores" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right; margin-bottom:20px;">Volver al principio</a>

@endsection
