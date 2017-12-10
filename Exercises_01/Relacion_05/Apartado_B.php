<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Apartado B</title>
</head>
<body>
  <h5>Antonio Jesús Alvarez Malagon</h5>
  <h1>Manejo de cadenas</h1>
  <h2>Ejemplo 2</h2>
  <?php

     $texto = "uno-dos-tres-cuatro-cinco";
     $lineas = explode ("-", $texto);
     $n_lineas = count ($lineas);

     print ("<ul><br />");
     for ($i=0; $i<$n_lineas; $i++)
        print ("   <li>$lineas[$i]</li><br />");
     print ("</ul><br />");

  ?>
</body>
</html>
