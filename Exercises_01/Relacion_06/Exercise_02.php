<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario</title>
</head>
<body>
  <?php
    $archivo="Datos.txt";
    $file=file($archivo);
    foreach ($file as $value) {
      echo "$value <br/>";
    }
    $total = count($file);
    echo "$total <br/>";
    $tamano = filesize($archivo);
    echo "$tamano <br/>";
?>
</body>
</html>
