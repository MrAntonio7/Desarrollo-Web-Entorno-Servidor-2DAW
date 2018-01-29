<?php
$movies = array(
"Comedia" => array("Con faldas y a lo loco", "Tiempos modernos", "Scary Movie", "Ted", "American Pie"),
"Aventuras" => array("El señor de los anillos", "El rey arturo", "Braveheart"),
"Acción" => array("Terminator", "La jungla de cristal", "La conspiración de Noviembre"),
"Pastelazo infumable" => array("Mi gran boda griega", "El diario de Noah", "Notting Hill")
);


/* print_r($movies);
print ("<br><br>");

print_r(array_values($movies["comedy"]));
print ("<br><br>");

print_r(array_keys($movies));
print ("<br><br>"); */

function printAll($a){
    foreach ($a as $k => $v) {   #para cada elemento del array como clave imprime la clave
        echo $k, '<br>';
        printAllVals($v);
        echo '<br><br>';
    }

}

function printAllVals($a){
    if (!is_array($a)){
        echo $a, '<br>';
        return;
    }
    foreach ($a as $k => $v){
        if ($k < 10){
            printAllVals($v);
        }
    }
}

printAll($movies);

/*
foreach ($movies as $key => $value) {
    echo "$key &nbsp => &nbsp  $value[0]\n<br>";
}

foreach ($movies as $gender) {
    foreach ($gender as $key => $val) {
        echo $key . ' = ' . $val . '<br />';
    }
} */
?>
