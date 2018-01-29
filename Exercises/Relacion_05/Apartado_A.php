<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Apartado 1</title>
</head>
<body>
  <h5>Antonio Jesús Alvarez Malagon</h5>
  <h1>Manejo de cadenas</h1>
  <h2>Ejemplo 1</h2>
<?php

//1

function calcula_extension ($nombreFichero)
{
   $extension = stristr ($nombreFichero, '.');
   $extension = ltrim ($extension, '.');
   $extension = strtoupper ($extension);
   return ($extension);
}

// 2

function tipo_fichero ($extension)
{
   if ($extension == 'PDF')
      $tipo = 'Documento Adobe PDF';
   else if ($extension == 'TXT')
      $tipo = 'Documento de texto';
   else if ($extension == 'HTML' || $extension == 'HTM')
      $tipo = 'Documento HTML';
   else if ($extension == 'PPT')
      $tipo = 'Presentacion Microsoft Powerpoint';
   else if ($extension == 'DOC')
      $tipo = 'Documento Microsoft Word';
   else if ($extension == 'GIF')
      $tipo = 'Imagen GIF';
   else if ($extension == 'JPG')
      $tipo = 'Imagen JPG';
   else if ($extension == 'ZIP')
      $tipo = 'Archivo comprimido ZIP';
   else
      $tipo = "Archivo " . $extension;
   return ($tipo);
}

   $fichero = "curriculum.pdf";
   $extension = calcula_extension ($fichero);
   $tipo = tipo_fichero ($extension);
   print ("El fichero '$fichero' es de tipo '$tipo'.\n");
   
?>
</body>
</html>
