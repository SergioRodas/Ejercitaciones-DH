<?php
if (!$_POST}) {
  header("Location:registro_usuarios.php";exit;)
}
$nombre=$_POST['name'];
$edad=$_POST['edad'];
$pais=$_POST['country'];
$email=$_POST['email'];
$user=$_POST['username'];
$contraseña=$_POST['password'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background:skyblue;">
  <h1 style="text-align:center; color:red;"> ¡BIENVENIDO!</h1> <h3 style="color:white; font-weight:bold;text-align:center;">Muchas Gracias por registrarte <?=$nombre?>. <br> Usted tiene <?=$edad?> años y es de <?=$pais?>. <br> Hemos registrado '<?=$email?>' como su email y '<?=$user?>' como su nombre de usuario. <br> ¡Gracias! </h3>
  </body>
</html>
