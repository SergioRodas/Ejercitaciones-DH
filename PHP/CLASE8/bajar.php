<?php

$archivos=scandir(dirname(__FILE__)."/subidos/");

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach ($archivos as $archivo):?>
      <a href="<?="/subidos/".$archivo?>" download>Descargar <?=$archivo?></a>
    <?php endforeach ?>


  </body>
</html>
