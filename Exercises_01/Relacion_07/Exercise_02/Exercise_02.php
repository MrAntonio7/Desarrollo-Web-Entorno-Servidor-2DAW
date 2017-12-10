<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cookies</title>
</head>
<body>
<?php
if (isset($_POST["guardado"])) {
  if (isset($_POST["iniciar"])) {
      setcookie("usuario", $_POST["usuario"], time() + 60 * 10, "/");
      setcookie("contrasena", $_POST["contrasena"], time() + 60 * 10, "/");
    }
    echo "<h2>Usuario guardado</h2><br/>";
}
echo "<h2><a href='index.php'>Volver atrás</a></h2>";
?>
</body>
</html>

 