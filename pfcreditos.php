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
    <title>Créditos</title>
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
        <div id="div_cliente" class="tablita"><!--div creditos-->
            <legend>Créditos</legend>
            <input type="text" placeholder="Busqueda" id="buscar"><button id="buscar_boton" class="botones">Buscar</button><br><br>
            <table class="tabla_creditos">
                <thead>
                    <tr>
                        <td>Cliente</td>
                        <td>Automóvil</td>
                        <td>Precio</td>
                        <td>Enganche</td>
                        <td>Plazo</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                    /*Actualización tabla creditos */
                    //Falta llamar los datos de nombre cliente y vehiculo con la foreign key
                    //Select * from cliente as cl, credito as cr, vehiculo as ve WHERE cl.id_cliente = cr.id_cliente and ve.id_vehiculo = cr.id_vehiculo
                    //Select * from cliente, credito, vehiculo WHERE cliente.id_cliente = credito.id_cliente and vehiculo.id_vehiculo = credito.id_vehiculo
                    $query ="SELECT * FROM cliente, credito, vehiculo WHERE cliente.id_cliente = credito.id_cliente AND vehiculo.id_vehiculo = credito.id_vehiculo";
                    $result=mysqli_query($db,$query);
                    while($mostrar=mysqli_fetch_array($result)){                    
                        if($mostrar['status']==0)
                        {
                            $mostrar['status']="Rechazado";
                        }
                        else if ($mostrar['status']==1)
                        {
                            $mostrar['status']="Aceptado";
                        }
                    ?>
                    <tr>
                        <td><?php echo $mostrar['nombre'] ?> </td>
                        <td><?php echo $mostrar['modelo'] ?> </td>
                        <td><?php echo $mostrar['precio'] ?> </td>
                        <td><?php echo $mostrar['enganche'] ?> </td>
                        <td><?php echo $mostrar['plazo'] ?> </td>
                        <td><?php echo $mostrar['status'] ?> </td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div><!--div creditos-->
    </div><!--contenedor general-->
</body>
</html>