@extends('layout.default')
@section('title','Subir imagen')
@section('content')

              <h1 class="text-center mb-5 mt-3" style="color:crimson;">Subir una imagen</h1>
        <form style="text-align: -webkit-center;" id="subirImagen" name="subirImagen" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="col-lg-5 col-md-8 mt-5 mb-4 pt-2 pb-1 text-center border border-danger">

            <label for="">Imagen:</label>
            <input type="file" name="imagen" value="">

          </div>

          <div class="text-center">

            <input class="btn rounded text-white bg-danger" type="submit" value="Subir Imagen" name="submit"/>

          </div>
        </form>
@endsection
