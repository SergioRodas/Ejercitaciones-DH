<?php

$archivo="categorias.json";
$contenido=file_get_contents($archivo);
$categorias=json_decode($contenido, true);
var_dump($categorias);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <?php foreach ($categorias["categorias"] as $categoria): ?>
        <br>
        <label> <?=$categoria["nombre"]?></label>
        <input type="checkbox" name="" value="<?=$categoria["id"]?>">
      <?php endforeach ?>
    </form>
  </body>
</html>
