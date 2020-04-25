<?PHP
$Paises=["Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Argentina","Armenia","Australia","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín","Bielorrusia","Birmania","Bolivia","Bosnia y Herzegovina","Botswana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi","Bután","Cabo Verde","Camboya","Camerún","Canadá","Catar","Chad","Chile","China","Chipre","Ciudad del Vaticano","Colombia","Comoras","Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca","Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia","Eslovenia","España","Estados Unidos","Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia","Ghana","Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría","India","Indonesia","Irak","Irán","Irlanda","Islandia","Islas Marshall","Islas Salomón","Israel","Italia","Jamaica","Japón","Jordania","Kazajistán","Kenia","Kirguistán","Kiribati","Kuwait","Laos","Lesoto","Letonia","Líbano","Liberia","Libia","Liechtenstein","Lituania","Luxemburgo","Madagascar","Malasia","Malaui","Maldivas","Malí","Malta","Marruecos","Mauricio","Mauritania","México","Micronesia","Moldavia","Mónaco","Mongolia","Montenegro","Mozambique","Namibia","Nauru","Nepal","Nicaragua","Níger","Nigeria","Noruega","Nueva Zelanda","Omán","Países Bajos","Pakistán","Palaos","Panamá","Papúa Nueva Guinea","Paraguay","Perú","Polonia","Portugal","Reino Unido","República Centroafricana","República Checa","República de Macedonia","República del Congo","República Democrática del Congo","República Dominicana","República Sudafricana","Ruanda","Rumanía","Rusia","Samoa","San Cristóbal y Nieves","San Marino","San Vicente y las Granadinas","Santa Lucía","Santo Tomé y Príncipe","Senegal","Serbia","Seychelles","Sierra Leona","Singapur","Siria","Somalia","Sri Lanka","Suazilandia","Sudán","Sudán del Sur","Suecia","Suiza","Surinam","Tailandia","Tanzania","Tayikistán","Timor Oriental","Togo","Tonga","Trinidad y Tobago","Túnez","Turkmenistán","Turquía","Tuvalu","Ucrania","Uganda","Uruguay","Uzbekistán","Vanuatu","Venezuela","Vietnam","Yemen","Yibuti","Zambia","Zimbabue"];
$nombre="";
$email="";
$usuario="";
$contrasenia="";
$errores=[];
if ($_POST) {
  if (!$_POST["name"]) {
      $errores["name"]= "El campo no debe estar vacío";
  }else if (strlen($_POST["name"])<3||strlen($_POST["name"])>30) {
      $errores["name"]= "El campo debe tener entre 3 y 30 caracteres";
  } else{
    $nombre= $_POST["name"];
  }
  if (!$_POST["email"]) {
      $errores["email"]= "El campo no debe estar vacío";
  }else if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
      $errores["email"]= "El email ingresado no es valido";
  } else{
    $email= $_POST["email"];
  }
  if (!$_POST["username"]) {
      $errores["username"]= "El campo no debe estar vacío";
  }else if (strlen($_POST["username"])<3||strlen($_POST["username"])>15) {
      $errores["username"]= "El campo debe tener entre 3 y 15 caracteres";
  } else{
    $usuario= $_POST["username"];
  }
  if (!$_POST["password"]) {
      $errores["password"]= "El campo no debe estar vacío";
  }else if (strlen($_POST["username"])<8||strlen($_POST["username"])>25) {
      $errores["password"]= "La contraseña debe tener entre 8 y 25 caracteres";
  } else if ($_POST["password"]!=$_POST["confpassword"]){
      $errores["password"]= "Las contraseñas no coinciden";
  } else {
    $contrasenia=password_hash($_POST["password"],PASSWORD_BCRYPT);
  }
  if (count($errores)==0) {
    $datosValidados=[$nombre, $email, $usuario, $contrasenia];
    $datosJson=json_encode($datosValidados);
    $baseDeDatos=fopen('usuarios.txt', 'a+');
    fwrite($baseDeDatos,"$datosJson.\n");
    fclose($baseDeDatos);
    header('location:felicitaciones.html');
    exit;
  }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?=$nombre?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'><?=isset($errores["name"])?$errores["name"]:""?></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='<?=$email?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'><?=isset($errores["email"])?$errores["email"]:""?></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='<?=$usuario?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'><?=isset($errores["username"])?$errores["username"]:""?></span>
                </div>
                <div class='container'>
                    <label for='password' >Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <?php if (!isset($_GET['Version-corta'])): ?>
                <div class='container'>
                    <label for='password' >Confirmar contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='confpassword' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
              <?php endif?>
                <div class='container'>
              <label for="country">Seleccione su país:</label>
              <br>
              <select name="country">
                <?php foreach ($Paises as $posicion=>$Pais):?>
                  <?php if($_POST['country'] == $posicion): ?>
                    <option value="<?=$posicion?>" selected>
                      <?=$Pais?>
                    </option>
                  <?php else : ?>
                    <option value="<?=$posicion?>">
                      <?=$Pais?>
                    </option>
                  <?php endif; ?>
                <?php endforeach; ?>
                      </select>
                        </div>
                <br>
                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
