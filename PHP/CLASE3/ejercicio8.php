<?php

$nombres=["Sergio", " Federico", " Martín", "Joaquín"," Belén"];
for($i=0;$i<count($nombres);$i++){
  echo "$nombres[$i]";
}
echo"<br>";
$i=0;
while($i<count($nombres)){
  echo "$nombres[$i]";
  $i++;
}
echo"<br>";
$i=0;
do{
  echo "$nombres[$i]";
  $i++;
}while($i<count($nombres));
echo"<br>";
foreach($nombres as $nombre){
  echo $nombre;
}

 ?>
