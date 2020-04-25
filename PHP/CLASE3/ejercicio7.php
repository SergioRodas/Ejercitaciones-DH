<?php
$cantTiros=0;
do {
  $cantTiros++;
  $moneda=rand(0,1);
} while (!$moneda);
echo "Se obtuvo una cara luego de $cantTiros intentos";


 ?>
