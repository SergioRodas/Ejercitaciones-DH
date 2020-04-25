<?php
var_dump($_POST);
if ($_POST)guardarArchivo();

function guardarArchivo(){
  if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
      $nombre= $_FILES["archivo"]["name"];
      $archivo= $_FILES["archivo"]["tmp_name"];
      $ext= pathinfo($nombre, PATHINFO_EXTENSION);

      $miArchivo = dirname(__FILE__)."/subidos/"."nombre".".".$ext;
      move_uploaded_file($archivo,$miArchivo);
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form method="POST" enctype="multipart/form-data">
       <div class="form-group">
      Archivo: <input type="file" name="archivo" multiple>
    </div>
      <button type="submit" name="enviar" >Enviar</button>

     </form>

   </body>
 </html>
