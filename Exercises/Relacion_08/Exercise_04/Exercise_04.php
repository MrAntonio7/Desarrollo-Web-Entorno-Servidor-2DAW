<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise_04</title>
</head>
<body>
    <?php
    class Travelmas {
        var $fichero = "viajes.txt";
        
        function añadir_viaje(){
            $f= fopen($this -> fichero,"r+") or die ("Problemas en la creacion");
            $tabla="<table border='1'><tr><th>Nombre</th><th>Destino</th><th>Duración</th><th>Salida</th></tr>";
            while(($linea = fgets($f)) !== false){
                $viaje = explode(':',$linea);
                $tabla .= "<tr><td>$viaje[0]</td><td>$viaje[1]</td><td>$viaje[2]</td><td>$viaje[3]</td></tr>";
            }
            $tabla .= "</table><br><br>";
            fclose($f);
            return $tabla;
            
            
        }
        function escribir_tabla(){
            echo $this -> añadir_viaje();
        }
    } 
    $app = new Travelmas();
    $app -> escribir_tabla();

    ?>
    <form action="Exercise_04.1.php" method="post">
    Introduzca el nombre del circuito: <br/>
    <input type="text" name="nombre" id="nombre"/> <br/>
    Introduzca el destino: <br/>
    <input type="text" name="destino" id="destino"/> <br/>
    Introduzca la duración: <br/>
    <input type="text" name="duracion" id="duracion"/> <br/>
    Introduzca los días de salida: <br/>
    <input type="text" name="dias" id="dias"/> <br/><br/>
    <input type="submit" value="Enviar comentario"/>
</form>
</body>
</html>