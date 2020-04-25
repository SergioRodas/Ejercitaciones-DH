@extends('layout.default')
@section('content')
    <h1 style="margin-top:50px; text-align: center; font-size:45px;"> Actor: </h1>

    <div style="padding-top:35px;">
      <ul>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">Nombre Completo: {{$actor->getNombreCompleto()}}</li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">Rating: {{($actor->rating!= '' ? $actor->rating:"Aún no tiene rating")}}</li>
        <li style="font-weight: bold; font-size: 32px; margin-left:90px; padding-bottom:20px; color: crimson;">Película favorita: {{($actor->getPeliculaFavorita($id)!= '' ? $actor->getPeliculaFavorita($id):"No tiene")}}</li>
      </ul>
    </div>

    <form id="borrarActor" name="borrarActor" method="POST" action="/actor/{{$actor->id}}">
      @method('delete')
      @csrf
        <div style="text-align:center; margin-top:20px">
        <input type="submit" value="Borrar Actor" name="submit"/>
      </div>
    </form>
    
    <a href="/actores" style="margin-right:50px; text-decoration: none; color: crimson; font-size: 22px; float:right;">←Seleccionar actor</a>

@endsection
