<?php
include_once 'conexion.php';
$idSerie=$_GET['id'];
$db=conectarse();
$query=$db->prepare("SELECT series.title AS serie, count(episodes.id) AS cant_episodios, series.release_date AS fecha FROM series LEFT JOIN seasons ON serie_id=series.id LEFT JOIN episodes ON season_id=seasons.id WHERE series.id LIKE '$idSerie' GROUP BY serie;");
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body style="background: skyblue;">
     <h1 style="text-align: center; color: crimson; font-size:35px;"> Información de las series: </h1>
     <div style="padding-top:25px;">
       <ul>
         <li style="font-size:25px; margin-left:50px;"><?= $results['serie'];?> <div style="color:red;">cantidad de episodios : <?= $results['cant_episodios'];?></div> <div style="color:blue;"> fecha de estreno : <?= $results['fecha'];?></div></li> <br>
       </ul>
     </div>
<a href="series.php" style="margin-right:50px; float:right;">Volver a las series</a>
   </body>
 </html>
