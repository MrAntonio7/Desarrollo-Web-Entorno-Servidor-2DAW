<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Relacion 4</title>
</head>
<body>
<h1>Relación 4</h1>
<h2>Ejercicio 1</h2>

<p>
  <?php
  $frase = "Este texto contiene una buena cantidad de letras";
  $f1 = strpos($frase, 'a');
  echo "La posición de la primera ocurrencia de la letra 'a': <b>$f1</b> <br/>";
  $f2 = strpos($frase, 'm');
  echo "La posición de la primera ocurrencia de la letra 'm': <b>$f2</b> <br/>";
  $f3 = strpos($frase, 'cantidad');
  echo "La posición de la primera ocurrencia de la palabra 'cantidad': <b>$f3</b> <br/>";
  $f4 = strrchr($frase, 'e');
  echo "La primera ocurrencia desde el final de la letra 'e': <b>$f4</b> <br/>";
  $f5 = strstr($frase, 'texto');
  echo "La frase desde la aparición de la palabra 'texto' hasta el final: <b>$f5</b> <br/>";
  $f6 = substr($frase, 15);
  echo "La cadena desde el carácter 15 hasta el final: <b>$f6</b><br/>";
  $f7 = substr($frase, 18, 6);
  echo "La cadena devolviendo 6 caracteres desde el carácter 18: <b>$f7</b> <br/>";
  $f8 = substr($frase, count($frase)-10);
  echo "La cadena devolviendo los 9 últimos caracteres: <b>$f8</b> <br/>";
  ?>
</p>
<h2>Ejercicio 2</h2>

<p>
  <?php
  $frase = "Bienvenidos a la aventura de aprender PHP en 30 horas";
  echo "Mostrar la parte central de la frase: $f1 <br/>";
  echo "Averiguar la posición de la palabra PHP: $f2 <br/>";
  $f3 = str_replace('aventura', 'mision', $frase);
  echo "Reemplazar la palabra 'aventura' por la cadena 'misión': $f3 <br/>";
  ?>
</p>
<h2>Ejercicio 3</h2>
<p>
  <?php
  echo htmlspecialchars("<a href= '/arbol/prueba.php' class='prueba' onmouseOver='status='hola';
  return trae;'>pruebade\enlace</a>");  
  ?>
</p>
</body>
</html>
