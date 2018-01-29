<?php
    require_once("../modelos/modelo.php");
    $alumno = new Estudiante();
    $datos = $alumno->getEstudiante();
    require_once("../vistas/vista.php");
?>
