<?php
include_once 'conexion.php';

$db=conectarse();
$query=$db->query('SELECT * from movies');
$results=$query->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $result) {
  echo "Nombre: ".$result['title']."<br>";
}

 ?>
