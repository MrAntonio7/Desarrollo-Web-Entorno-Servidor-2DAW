<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise_02</title>
</head>
<body>

<?php
class Ficheros {
    var $ruta="";
    // Funcion que muestra la estructura de carpetas a partir de la ruta dada.
    function obtener_estructura_directorios(){
        // Se comprueba que realmente sea la ruta de un directorio
        if (is_dir($this -> ruta)){
            // Abre un gestor de directorios para la ruta indicada
            $gestor = opendir($this -> ruta);
            echo "<ul>";

            // Recorre todos los elementos del directorio
            while (($archivo = readdir($gestor)) !== false)  {
                    
                $ruta_completa = $this -> ruta . "/" . $archivo;

                // Se muestran todos los archivos y carpetas excepto "." y ".."
                if ($archivo != "." && $archivo != "..") {
                    $hora = date("H:i:s", filectime($archivo));
                    $fecha = date("d F Y", filectime($archivo));
                    // Si es un directorio se recorre recursivamente
                    if (is_dir($ruta_completa)) {
                        continue;
                    } else {
                        echo "<li>" . $archivo . " " . filesize($archivo). " " .$hora . " " . $fecha. "</li>";
                    }
                }
            }
            
            // Cierra el gestor de directorios
            closedir($gestor);
            echo "</ul>";
        } else {
            echo "No es una ruta de directorio valida<br/>";
        }
}
}

$prueba = new Ficheros();
$prueba -> ruta = "./";
$prueba -> obtener_estructura_directorios();
?>
</body>
</html>


