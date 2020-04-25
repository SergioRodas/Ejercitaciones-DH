<?php

$array=[];
for($i=0;$i<10;$i++){
  $array[]=rand(0,10);
}
for($i=0;$i<count($array);$i++){
  $valor=$array[$i];
  echo $valor;
  if($valor==5){
    echo "Se encontró un 5!";
    break;
  }
}
echo "<br>";

$array=[];
$i=0;
while($i<10){
  $array[]=rand(0,10);
  $valor=$array[$i];
  echo $valor;
  $i++;
  if($valor==5){
    echo "Se encontró un 5!";
    break;
  }
}
echo "<br>";

$array=[];
$i=0;
do {
  $array[]=rand(0,10);
  $valor=$array[$i];
  echo $valor;
  if($valor==5){
    echo "Se encontró un 5!";
    break;
  }
  $i++;
} while ($i<10);

 ?>
