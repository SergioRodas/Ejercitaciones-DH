<?php

var_dump($_POST);
foreach ($_POST as $key => $value) {
  echo "<br>".$key."= ".$value;
}
foreach (getallheaders() as $nombre => $valor){
  echo "<br>$nombre: $valor\n";
}
 ?>
