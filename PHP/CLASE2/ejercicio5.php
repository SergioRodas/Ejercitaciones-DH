<?php

$nombreDeUsuario="admin";
$contraseniaDeUsuario="1234";
if($nombreDeUsuario=="admin"&& $contraseniaDeUsuario=="1234"){
  echo "Bienvenido!";
} elseif ($nombreDeUsuario==false || $contraseniaDeUsuario== false){
  echo "Hay campos sin completar";
}
 else {
  if ($nombreDeUsuario!="admin"){
  echo "El nombre de usuario es incorrecto";
}
 if ($contraseniaDeUsuario!="1234"){
  echo "Contraseña incorrecta";
}
}
 ?>
