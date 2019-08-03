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
    <script src="referencias/jquery-3.4.1.min.js"></script>
    <title>Artículos</title>
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
        <form id="nuevo_articulo" method="POST" class="nuevo"><!--form-->
            <legend>Nuevo Artículo</legend><hr color="white">
            <table class="tabla_nuevo_art" >
                <tr>
                    <!--<td><label for="nombre_art">Artículo</label></td>
                    <td><input type="text" placeholder="Artículo" id="articulo" name="articulo"></td>-->
                    <td><label for="codigo_articulo">Código</label></td>
                    <td><input type="text" placeholder="Código" id="codigo_articulo" name="codigo_articulo"></td>
                    <td><label for="precio_articulo">Precio</label></td>
                    <td><input type="number" placeholder="Precio" id="precio_articulo" name="precio_articulo"></td>
                </tr>
                <tr>
                    <td><label for="descripcion_articulo">Descripción</label></td>
                    <td colspan="5"><textarea name="descripcion_articulo" id="descripcion_articulo" placeholder="Descripción de artículo" cols="50" rows="3"></textarea></td>
                </tr>
            </table>
            <br>
            <div id="cont_botones">
            <button id="agregar_articulo" class="botones">Agregar</button><div id="space"></div>
            <button id="cancelar_articulo" class="botones">Cancelar</button>
            </div>

        </form><!--form-->



        <div id="div_articulos" class="tablita"><!--div articulos-->
            <legend>Artículos</legend>
            <input type="text" placeholder="Busqueda" id="buscar"><button id="buscar_boton" class="botones">Buscar</button><br><br>
            <table class="tabla_art">
                <thead>
                    <tr>
                        <td>Artículo</td>
                        <td>Código</td>
                        <td>Precio</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query="SELECT * FROM articulo";
                    $result=mysqli_query($db,$query);
                    while($mostrar=mysqli_fetch_array($result)){    
                    ?>
                    <tr>
                    <td><?php echo $mostrar['descripcion'] ?></td>
                    <td><?php echo $mostrar['codigo'] ?></td>
                    <td><?php echo $mostrar['precio'] ?></td>
                    <td><a href=""><img src="modify.png" class="md" alt=""></a><a href=""><img src="delete.png" class="md" alt=""></a></td>
                    </tr>                
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div><!--div empleado-->
    </div><!--contenedor general-->
    <script src="pfarticulos.js"></script>   
</body>
</html>