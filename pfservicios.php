<?php
include 'pfconexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pfdesign.css">
    <title>Servicios</title>
</head>
<body>
    <div id="continicio">
        <img src="" alt="LOGOTIPO" id="imglogo">
        <div id="user">Usuario</div>
    </div>
    <div id="contmenu"> 
        <div id="panel" class="mn"><a href="pfinicio.php">Inicio</a></div>
        <div id="empleados" class="mn"><a href="pfempleados.php">Empleados</a></div>
        <div id="autos" class="mn"><a href="pfautos.php">Automóviles</a></div>
        <div id="servicios" class="mn"><a href="pfservicios.php">Servicios</a></div>
        <div id="clientes" class="mn"><a href="pfclientes.php">Clientes</a></div>
        <div id="creditos" class="mn"><a href="pfcreditos.php">Créditos</a></div>
        <div id="reportes" class="mn"><a href="pfreportes.php">Reportes</a></div>
        <div id="articulos" class="mn"><a href="pfarticulos.php">Artículos</a></div>
    </div>
    <!----------------------------------------------------------------------------------------------------------------------------------------------->
    <div id="contenedor"><!--contenedor general-->
        <div id="div_serv" class="tablita"><!--div servicio-->
            <legend>Servicios</legend>
            <input type="text" placeholder="Busqueda" id="buscar"><button id="buscar_boton" class="botones">Buscar</button> <br><br>
            <table class="tabla_serv">
                <thead>
                    <tr>
                        <td>Servicio</td>
                        <td>Descripción</td>
                        <td>Precio</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query ="SELECT * FROM servicio";
                $result=mysqli_query($db,$query);
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['nombre_servicio'] ?></td>
                    <td><?php echo $mostrar['evaluacion'] ?></td>
                    <td><?php echo $mostrar[''] ?></td>                
                    <td><img src="modify.png" class="md" alt=""></td>
                </tr>
                <?php
                }
                ?>

                </tbody>
            </table>
        </div><!--div servicio-->
    </div><!--contenedor general-->
</body>
</html>