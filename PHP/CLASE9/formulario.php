<?php
session_start();
if ($_POST) {
  setcookie("color",$_POST["color"]);
  header("Location:formulario.php");
  exit;
}

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color: <?=isset($_COOKIE["color"])?$_COOKIE["color"]:"none" ?>">
    <form class="" method="post" style="text-align:center;">
      <label style="font-size:25px;" >Elija el color del fondo:</label>
      <br>
      <select name="color" class="">
        <option  value="crimson" <?=isset($_COOKIE["color"])&&$_COOKIE["color"]=="crimson"?"selected":""?>>Carmesí</option>
        <option  value="orange" <?=isset($_COOKIE["color"])&&$_COOKIE["color"]=="orange"?"selected":""?>>Naranja</option>
        <option  value="blue" <?=isset($_COOKIE["color"])&&$_COOKIE["color"]=="blue"?"selected":""?>>Azul</option>
        <option  value="yellow" <?=isset($_COOKIE["color"])&&$_COOKIE["color"]=="yellow"?"selected":""?>>Amarillo</option>
        <option  value="skyblue" <?=isset($_COOKIE["color"])&&$_COOKIE["color"]=="skyblue"?"selected":""?>>Celeste</option>

      </select>
      <br>
      <br>
        <button type="submit" name="button">Enviar</button>



    </form>
  </body>
</html>
