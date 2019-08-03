<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pfdesign.css">
    <title>Reportes</title>
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
        <form id="generar_reportes" class="nuevo"><!--form -->
            <legend>Generar Reportes</legend><hr color="white">
            <table class="tabla_generar_reportes" >
                <tr>
                    <td><label for="mensual">Mes</label>
                    <input type="month" id="mes" name="mes"></td>
                    <td><button id="reporte_mensual" class="botones" name="reporte_mensual">Reporte Mensual</button></td>
                    <div id="space"></div>
                    <td><label for="anual">Año</label>
                    <input type="date" id="year" name="year"></td>
                    <td><button id="reporte_anual" class="botones" name="reporte_anual">Reporte Anual</button></td>
                </tr>
            </table>
        </form><!--form-->

        <div id="div_reportes" class="tablita"><!--div reportes-->
            <legend>Reportes</legend>
            <table class="tabla_rep">
                <thead>
                    <tr>
                        <td>Ingresos</td>
                        <td>Crédito</td>
                        <td>Contado</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ingresos por Ventas</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                    </tr>
                    <tr>
                        <td>Ingresos por Servicios</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                    </tr>
                    <tr>
                        <td>Ingresos Totales</td>
                        <td colspan="2">$0.00</td>
                    </tr>
                </tbody>


                <thead>
                    <tr>
                        <td>Impuestos</td>
                        <td>Crédito</td>
                        <td>Contado</td>
                    </tr>
                    
                </thead>
                <tbody>
                    <tr>
                        <td>Impuesto sobre ventas</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                    </tr>
                    <tr>
                        <td>Impuesto sobre servicios</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                    </tr>
                    <tr>
                        <td>Impuestos Totales</td>
                        <td colspan="2">$0.00</td>
                    </tr>
                </tbody>
            </table>
        </div><!--div empleado-->
    </div><!--contenedor general-->
</body>
</html>