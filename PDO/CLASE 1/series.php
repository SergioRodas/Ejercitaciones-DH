<?php
include_once 'conexion.php';
$db=conectarse();
$query=$db->prepare('SELECT * from series');
$query->execute();
$results=$query->fetchAll(PDO::FETCH_ASSOC);


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background: skyblue;">
    <h1 style="text-align: center; color: crimson; font-size:35px;"> Series: </h1>
    <div style="padding-top:25px;">
      <ul>
        <?php foreach ($results as $result): ?>
        <a href="serie.php?id=<?=$result['id']?>" style="margin-right:50px;text-decoration: none; color: red;"><li style="font-size:25px; margin-left:50px;"><?= $result['title'];?></li></a> 
        <?php endforeach;?>
      </ul>
    </div>



  </body>
</html>
