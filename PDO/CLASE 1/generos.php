<?php
include_once 'conexion.php';

$db=conectarse();
$query=$db->query('SELECT * from genres');
$results=$query->fetchAll(PDO::FETCH_ASSOC);


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background: skyblue;">
    <h1 style="text-align: center; color: crimson; font-size:35px;"> GÉNEROS: </h1>
    <div style="padding-top:25px;">
      <ul>
        <?php foreach ($results as $result): ?>
        <li style="font-size:25px; margin-left:50px;"><?= $result['name'];?></li> <br>
        <?php endforeach;?>
      </ul>
    </div>

  </body>
</html>
