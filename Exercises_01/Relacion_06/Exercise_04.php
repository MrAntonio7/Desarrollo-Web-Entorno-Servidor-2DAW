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

    $nombre="";
    if (!empty($_POST['nombre'])){
    $nombre=$_POST['nombre'];
    }

    $agradecimiento="";
    if (!empty($_POST['agradecimiento'])){
    $agradecimiento=$_POST['agradecimiento'];
    }


    $archivo="Libro.txt";

    $file=@fopen($archivo,"a");

    fwrite($file,$nombre.'-'.$agradecimiento);

    fclose($file);

?>

  <form method="post">

      <fieldset>
          <label>
              <b>Nombre - </b>
              <input type="text" name="nombre">
          </label>
      </fieldset>


      <fieldset>
          <label>
              <b>Agradecimiento - </b>
              <input type="text" name="agradecimiento">
          </label>
      </fieldset>


      <fieldset>
          <button type="submit" name="enviar">Insertar</button>
      </fieldset>

  </form>

</body>
</html>
