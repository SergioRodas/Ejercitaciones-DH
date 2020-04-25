<?php

function saludar(
  string $nombre,
  string $apellido=""
){
  return $nombre.$apellido;
}
$saludo=saludar("Juan ", "Perez");
$saludo2=saludar("Ricardo");
echo "Hola $saludo";
 ?>
