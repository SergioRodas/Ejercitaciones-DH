<?php

$cantCaras=0;
$cantTiros=0;
while($cantCaras<5){
  $cantTiros++;
  $moneda=rand(0,1);
  if($moneda){
    $cantCaras++;
  }
}
echo "Se obtuvieron $cantCaras caras en $cantTiros intentos";

 ?>
