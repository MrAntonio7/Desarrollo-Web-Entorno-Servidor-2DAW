<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise_01</title>
</head>
<body>
<?php
class Contador{
    var $fichero = "visitas.txt";//el archivo que contiene en numero

    function contar()
    {
        $f = fopen($this -> fichero, "r"); //abrimos el archivo en modo de lectura
        if($f)
        {
            $contador = fread($f, filesize($this -> fichero)); //leemos el archivo
            $contador = $contador + 1; //sumamos +1 al contador
            fclose($f);
        }
        $f = fopen($this -> fichero, "w+");
        if($f)
        {
            fwrite($f, $contador);
            fclose($f);
        }
        return $contador;
    }
    function escribir(){
        printf($this -> contar());
    }
}

$c = new Contador();
$c -> escribir();
?>  
</body>
</html>

