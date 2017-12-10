<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cookies</title>
</head>
<body>
  <h1>Ejercicio 2</h1>
  <form class="" action="Exercise_02.php" method="post">
    <label>
      Usuario<br/>
      <input type="text" name="usuario" value="<?php if (isset($_COOKIE["usuario"])) echo $_COOKIE["usuario"] ?>"><br/><br/>
    </label>
    <label>
      Contraseña<br/>
      <input type="password" name="contrasena" value="<?php if (isset($_COOKIE["contrasena"])) echo $_COOKIE["contrasena"] ?>"><br/><br/>
    </label>
    <input type="checkbox" name="guardado" value="guardado"/> Guardar usuario <br/><br/>
    <button type="submit" name="iniciar">Iniciar Sesión</button>
  </form>
</body>
</html>