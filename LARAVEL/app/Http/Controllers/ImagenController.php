<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagenController extends Controller
{

    public function subirImagen()
    {
      return view('imagen');
    }


    public function storage(Request $req)
    {

      $reglas = [
        "imagen" => "file"
      ];
      $mensajes = [
        "file" => "El archivo debe ser una imagen"
      ];

      $this->validate($req, $reglas, $mensajes);

      $ruta = $req->file("imagen")->store("public");

      $nombreArchivo = basename($ruta);

      $vac = compact('nombreArchivo');

      return view('imagenSubida', $vac);
    }
}
