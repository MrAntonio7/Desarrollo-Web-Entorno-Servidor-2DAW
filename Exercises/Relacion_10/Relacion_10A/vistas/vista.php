<!DOCTYPE html>
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
            <div class="col-lg-6 text-center">
                <hr/>
                <h3>Listado de estudiantes</h3>
                <table class="table">
                    <tr>
                        <td><strong>ESTUDIANTE</strong></td>
                        <td><strong>APELLIDOS</strong></td>
                        <td><strong>EMAIL</strong></td>
                        <td><strong>TELEFONO</strong></td>
                        <td><strong>TUTOR</strong></td>
                        <td><strong>GRUPO</strong></td>
                        <td><strong>FECHA DE INICIO</strong></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                        ?>
                        <tr>
                            <td><?php echo $datos[$i]["nombre"]; ?></td>
                            <td><?php echo $datos[$i]["apellidos"]; ?></td>
                            <td><?php echo $datos[$i]["email"]; ?></td>
                            <td><?php echo $datos[$i]["telefono"]; ?></td>
                            <td><?php echo $datos[$i]["tutor"]; ?></td>
                            <td><?php echo $datos[$i]["grupo"]; ?></td>
                            <td><?php echo $datos[$i]["fecha_de_inicio"]; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
                <hr/>
            </div> 
            <footer class="col-lg-12 text-center">
                DWES - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>
