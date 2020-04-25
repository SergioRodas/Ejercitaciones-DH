@extends('layout.default')
@section('title','Subir imagen')
@section('content')

              <h1 class="text-center mb-5 mt-3" style="color:crimson;">Imagen subida:</h1>
              <div style="text-align: -webkit-center;" class="mb-5">

                <div class="col-8">

                  <img class="img-fluid border border-danger" src="/storage/{{$nombreArchivo}}" alt="">

                </div>

              </div>


@endsection
