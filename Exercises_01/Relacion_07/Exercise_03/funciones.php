<?php


$_SESSION['sesion_iniciada'] = true;
$_SESSION['nombre'] = "Maria";
    

function deleteName(){
    echo "Valor de la variable de sesión: ".$_SESSION['nombre']."<br>";
    session_unset();
}
function deleteAll(){
    echo "<p>Variable borrada</p>";
    if( isset($_SESSION['nombre']) == false )
    echo "Valor de la variable de sesión: ".$_SESSION['nombre']."<br>";
    echo "Nombre no definido.<br />";
}
?>