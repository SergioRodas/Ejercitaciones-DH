<?php
include_once 'conexion.php';

$db=conectarse();
$query=$db->query('SELECT title as pelicula, name as genero from movies left join genres on genre_id = genres.id order by genero, pelicula');
$results=$query->fetchAll(PDO::FETCH_ASSOC);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body style="background: skyblue;">
     <h1 style="text-align: center; color: crimson; font-size:35px;"> Películas: </h1>
     <div style="padding-top:25px;">
       <ul>
         <?php foreach ($results as $result): ?>
         <li style="font-size:20px; margin-left:50px;"><?= $result['pelicula'];?> <div style="color:red;"><?= $result['genero'];?></div> </li>  <br>
         <?php endforeach;?>
       </ul>
     </div>

   </body>
 </html>
