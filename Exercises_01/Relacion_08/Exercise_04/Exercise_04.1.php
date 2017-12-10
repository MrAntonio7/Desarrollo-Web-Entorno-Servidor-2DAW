<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function añadir_linea(){
        $f = fopen("viajes.txt","a") or die("Problemas en la creacion");
        fputs($f,"\n");
        fputs($f,$_REQUEST["nombre"]);
        fputs($f,":");
        fputs($f,$_REQUEST["destino"]);
        fputs($f,":");
        fputs($f,$_REQUEST["duracion"]);
        fputs($f,":");
        fputs($f,$_REQUEST["dias"]);
        fclose($f);
}
añadir_linea();
?>
<button onclick="window.location='Exercise_04.php'">Refrescar tabla</button> 
</body>
</html>
