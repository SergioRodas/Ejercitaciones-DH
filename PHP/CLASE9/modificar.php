<?php
session_start();
if ($_POST) {
  switch ($_POST["enviar"]) {
    case 'incrementar':
      if (!isset($_SESSION["contador"])) {
        $_SESSION["contador"]=1;
      }else {
          $_SESSION["contador"]++;
      }
      break;

    case 'reiniciar':
      $_SESSION["contador"]=0;
      break;
  }
}


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background:skyblue;">
    <form class="" action="" method="post" style="text-align:center; margin-top:100px;">
      <button type="submit" name="enviar" value="incrementar" style="border:solid black; text-decoration: none; font-size:23px; background:red; color:white; padding:5px;">Incrementar</button>
      <button type="submit" name="enviar" value="reiniciar"style="border:solid black; text-decoration: none; font-size:23px; background:red; color:white; padding:5px;">Reiniciar</button>

    </form>

  </body>
</html>
