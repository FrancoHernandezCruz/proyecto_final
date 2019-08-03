<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pfdesign.css">
    <title>Clientes</title>
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
        <div id="div_cliente" class="tablita"><!--div cliente-->
            <legend>Clientes</legend>
            <input type="text" placeholder="Busqueda" id="buscar"><button id="buscar_boton" class="botones">Buscar</button><br><br>
            <table class="tabla_cliente">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Correo</td>
                        <td>Ingreso mensual</td>
                        <td>Historial</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cliente 1</td>
                        <td>cliente1@gmail.com</td>
                        <td>$10,000.00</td>
                        <td><button id="historial" class="botones">Historial</button></td>
                    </tr>
                    <tr>
                        <td>Cliente 2</td>
                        <td>cliente2@gmail.com</td>
                        <td>$20,000.00</td>
                        <td><button id="historial" class="botones">Historial</button></td>
                    </tr>
                    <tr>
                        <td>Cliente 3</td>
                        <td>cliente3@gmail.com</td>
                        <td>$30,000.00</td>
                        <td><button id="historial" class="botones">Historial</button></td>
                    </tr>
                    <tr>
                        <td>Cliente 4</td>
                        <td>cliente4@gmail.com</td>
                        <td>$40,000.00</td>
                        <td><button id="historial" class="botones">Historial</button></td>
                    </tr>
                    <tr>
                        <td>Cliente 5</td>
                        <td>cliente5@gmail.com</td>
                        <td>$50,000.00</td>
                        <td><button id="historial" class="botones">Historial</button></td>
                    </tr>
                </tbody>
            </table>
        </div><!--div cliente-->
    </div><!--contenedor general-->
</body>
</html>