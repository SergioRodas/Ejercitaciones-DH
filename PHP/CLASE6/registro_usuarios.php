<?PHP
$Paises=["Argentina", "Uruguay","España","Australia","Inglaterra","Holanda", "México","EE UU","Canadá","Italia"];
$nombre= "";
$email= "";
$edad= "";
$usuario="";
$contrasenia="";
$confirmar_contrasenia="";
if ($_POST) {
  $nombre= $_POST['name'];
  $email= $_POST['email'];
  $edad= $_POST['edad'];
  $usuario= $_POST['username'];
  $contrasenia= $_POST['password'];
  $confirmar_contrasenia= $_POST['password'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registro usuarios</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='registro_usuarios.php' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?=$nombre?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='edad' >Edad: </label><br/>
                    <input type="number" name="edad" value="<?=$edad?>"><br>

                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='<?=$email?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='<?=$usuario?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='password' >Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' value="<?=$contrasenia?>" id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <?php if (!isset($_GET['Version-corta'])): ?>
                <div class='container'>
                    <label for='password' >Confirmar contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' value="<?=$confirmar_contrasenia?>" id='password' maxlength="50" />
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
