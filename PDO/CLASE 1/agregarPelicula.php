<?php
include_once 'conexion.php';
if ($_POST){
  // 1 - Validación de datos
  $errores=[];
  $titulo = trim($_POST['title']);
  if (!$_POST["title"]) {
      $errores["title"]= "El campo no debe estar vacío";
    }else if (strlen($_POST["title"])>500) {
        $errores["title"]= "El campo no puede tener mas de 500 caracteres";
    } else{
  $titulo= $_POST["title"];
}


  $rating = trim($_POST['rating']);

  if (!$_POST["rating"]) {
      $errores["rating"]= "El campo no debe estar vacío";
  }else if ($_POST["rating"]>10) {
      $errores["rating"]= "El valor no debe ser mayor a 10,0";
  } else{
    $rating= $_POST["rating"];
  }

  $premios = trim($_POST['awards']);

  if (!$_POST["awards"]) {
      $errores["awards"]= "El campo no debe estar vacío";
  } else{
    $premios= $_POST["awards"];
  }

  $duracion = trim ($_POST['length']);
  if(!$_POST['length']) {
      $errores['length'] = "El campo no debe estar vacío";
  } else {
    $duracion = $_POST['length'];
  }

$fecha=$_POST['year']."-".$_POST['month']."-".$_POST['day'];

$db=conectarse();
$sql="INSERT into movies (title, rating, length, release_date) VALUES (:titulo, :rating, :duracion, :fecha)";
try {
    $query=$db->prepare($sql);
    $query->bindValue(":titulo", $titulo, PDO::PARAM_STR);
    $query->bindValue(":rating", $rating, PDO::PARAM_STR);
    $query->bindValue(":duracion", $duracion, PDO::PARAM_INT);
    $query->bindValue(":fecha", $fecha, PDO::PARAM_STR);
    $query->execute();
} catch (\PDOException $e) {
  echo $e->getMessage();
}

}

 ?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar Pelicula</title>

</head>

<body>
	<form method="post">
		<div>
			<label>Titulo</label>
			<input type="text" name="title" >
      <span id='register_name_errorloc' class='error'><?=isset($errores["title"])?$errores["title"]:""?></span>
		</div>
		<div>
			<label>Rating</label>
      <input type = "number" placeholder = "0.01 a 10.0" step = "0.01" min = "0" max = "10" name="rating" >
      <span id='register_name_errorloc' class='error'><?=isset($errores["rating"])?$errores["rating"]:""?></span>
		</div>
		<div>
			<label>Premios</label>
			<input type="number" name="awards" >
      <span id='register_name_errorloc' class='error'><?=isset($errores["awards"])?$errores["awards"]:""?></span>
		</div>
		<div>
			<label>Duracion</label>
			<input type="number  " name="length" >
      <span id='register_name_errorloc' class='error'><?=isset($errores["length"])?$errores["length"]:""?></span>
		</div>
		<div>
			<label>Fecha de Estreno</label> <br>
			<i>Año: </i>
			<select name="year">
				<?php for ($i=2018; $i >= 1920; $i--) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
			<i>Mes: </i>
			<select name="month">
				<?php for ($i=1; $i < 13; $i++) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
			<i>Día: </i>
			<select name="day">
				<?php for ($i=1; $i < 32; $i++) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
		</div>
		<button type="submit">Guardar película</button>
	</form>
</body>

</html>
