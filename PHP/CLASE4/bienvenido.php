<?php

echo "Hola Mundo. \n ";
echo "Bienvenido".' '.$nombre=readline("Ingrese su nombre:").".\n ";
$edad=readline("Ingrese su edad:").'. ';
if ($edad<18) {
  echo "Usted no está autorizado en el sistema. ";
  exit;
} else {
  echo "Autorización exitosa.\n ";
  }
  $positivo=["si","Si","SI","S","s"];
  $negativo=["no","No","NO","N","n"];


$hobbies=readline("Ingrese sus hobbies separados por coma:");
$hobbiesArray=explode(",",$hobbies);
$hobbiesValidos=[];
foreach ($hobbiesArray as $pos=>$hobby) {
  if (hobbyValido($hobby)) {
    $hobbiesValidos[]=$hobby;
  } //else {
  //
  //   //unset($hobbiesArray[$pos]);
  // }
}
$hobbiesConfirmados=[];
foreach ($hobbiesValidos as $key => $hobby) {
  $hobby=trim($hobby);
  do {
    $confirmacion=readline("Usted confirma que le gusta $hobby?");
    if (in_array($confirmacion,$positivo)){
      $hobbiesConfirmados[]=$hobby;
    } elseif (in_array($confirmacion,$negativo)) {
      echo "Hobby Eliminado\n";
    }else {
      echo "Debe indicar Si o No\n";
    }
  } while (!in_array($confirmacion,$positivo)&&!in_array($confirmacion,$negativo));

}
 {
  echo "Nombre: $nombre"."Edad: $edad"."\n"."Hobbies:";foreach($hobbiesConfirmados as $hobby){echo "$hobby\n";}
}


function hobbyValido(string $hobby){
  $largo=strlen($hobby);
  $esValido=$largo<15&&$largo>3?true:false;
  return $esValido;
  }
 ?>
