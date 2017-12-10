<!DOCTYPE html>
<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['apellidos'])) && ($_POST['apellidos'] != '') && (isset($_POST['email'])) && ($_POST['email'] != '')&& (isset($_POST['telefono'])) && ($_POST['telefono'] != '')&& (isset($_POST['tutor'])) && ($_POST['tutor'] != '')&& (isset($_POST['grupo'])) && ($_POST['grupo'] != '')&& (isset($_POST['fecha_de_inicio'])) && ($_POST['fecha_de_inicio'] != '')) {
 
    include "modelos/modelo.php";
    $nuevo = new Estudiante();
    $asd = $nuevo->setEstudiante($_POST['nombre'], $_POST['apellidos'],$_POST['email'],$_POST['telefono'],$_POST['tutor'],$_POST['grupo'],$_POST['fecha_de_inicio']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BD con MVC</title>
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1>BD con MVC</h1>
                <hr/>
                <p class="lead">Creamos una base de datos de los estudiantes <br/>
                    que podría realizar un comentario y <br/>
                    operamos con ella utilizando el paradigma MVC</p>
            </header>
            <div class="row">
                <div class="col-lg-6">
 
                    <form action="#" method="post" class="col-lg-5">
                        <h3>Nuevo estudiante</h3>                
                        Nombre: <input type="text" name="nombre" class="form-control"/>   <br> 
                        Apellidos: <input type="text" name="apellidos" class="form-control"/> <br> 
                        Email: <input type="text" name="email" class="form-control"/>     <br> 
                        Telefono: <input type="text" name="telefono" class="form-control"/>  <br> 
                        Tutor: <input type="text" name="tutor" class="form-control"/>  <br> 
                        Grupo: <input type="text" name="grupo" class="form-control"/>  <br> 
                        Fecha_de_inicio: <input type="text" name="fecha_de_inicio" class="form-control"/>  <br> 
                        <br/>
                        <input type="submit" value="Crear" class="btn btn-success"/>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <hr/>
                    <h3>Listado de estudiantes</h3>
                    <a href="controladores/controlador.php"><i class="fa fa-align-justify"></i> Acceder al listado de estudiantes</a>
                    <hr/>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
                DWES - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>
