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
    <title>Nómina</title>
</head>
<body>
    <div id="continicio">
        <img src="" alt="LOGOTIPO" id="imglogo">
        <div id="user">Nómina</div>
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
        <form id="div_nomina" class="tablita"><!--form-->
            <legend>Nómina</legend>
            <table class="tabla_nomina">
                <thead>
                    <tr>
                        <td>EMPLEADO</td>
                        <td>NOMBRE</td>
                        <td>F. INGRESO</td>
                        <td>RFC</td>
                        <td>Salario</td>
                    </tr>
                </thead>
                <tr>
                    <td>12345</td>
                    <td>EMPLEADO</td>
                    <td>30/04/2019</td>
                    <td>ASDF123456ZXC</td>
                    <td>MISXTO</td>
                </tr>
                <thead>
                    <tr>
                        <td>DEPARTAMENTO</td>
                        <td>SALARIO DIARIO</td>
                        <td>TIPO NÓMINA</td>
                        <td colspan="2">Periodo de Pago</td>
                    </tr>
                </thead>
                <tr>
                    <td>GERENCIA</td>
                    <td>123.45</td>
                    <td>QUINCENAL</td>
                    <td>del 06/07/2019 al 31/07/2019</td>
                </tr>
                <thead>
                    <tr>
                        <td>JORNADA</td>
                        <td>DÍAS</td>
                        <td>FORMA DE PAGO</td>
                        <td colspan="2">Resumen de Ausentismos</td>
                    </tr>
                </thead>
                <tr>
                    <td>8 HRS.</td>
                    <td>15.00</td>
                    <td>TARJETA</td>
                    <td>F=0 P=0 I=0 S=0 O=0 V=0 C=0 W=0 D=0 X=0 R=0</td>
                </tr>
                <thead>
                    <tr>
                        <td>PERCEPCIONES</td>
                        <td>DÍAS/HRS</td>
                        <td>IMPORTE</td>
                        <td>DEDUCCIONES</td>
                        <td>IMPORTE</td>
                    </tr>
                </thead>
                <tr>
                    <td>SALARIO</td>
                    <td>15.00</td>
                    <td>$12345.00</td>
                    <td>ISR RET. POR SUELDO Y GRAT</td>
                    <td>123.45</td>
                </tr>
                <tr>
                    <td>PRIMA DOMINICAL</td>
                    <td>2.00</td>
                    <td>123.45</td>
                    <td>IMSS</td>
                    <td>123.45</td>
                </tr>
                <tr>
                    <td>PREMIO DE PUNTUALIDAD</td>
                    <td></td>
                    <td>123.45</td>
                    <td>VALES DE DESPENSA</td>
                    <td>123.45</td>
                </tr>
                <tr>
                    <td>PREMIO DE ASISTENCIA</td>
                    <td></td>
                    <td>123.45</td>
                    <td>FONDO DE AHORRO EMPRESA</td>
                    <td>123.45</td>
                </tr>
                <tr>
                    <td>FONDO DE AHORRO EMPRESA</td>
                    <td></td>
                    <td>123.45</td>
                    <td>FONDO DE AHORRO TRABAJADOR</td>
                    <td>123.45</td>
                </tr>
                <tr>
                    <td>VALES DE DESPENSA</td>
                    <td></td>
                    <td>123.45</td>
                    <td>COMEDOR</td>
                    <td>123.45</td>
                </tr>
                <thead>
                    <tr>
                        <td colspan="2">TOTAL PERCEPCIONES</td>
                        <td>23456.00</td>
                        <td>TOTAL DEDUCCIONES</td>
                        <td>1234.56</td>
                    </tr>
                </thead>
                <tr>
                    <td colspan="2" style="font-size: 13px">
                        RECIBÍ DE CORPORACION DE SERVICIOS SUPER AUTOS MARTINEZ <br>
                        SA DE CV LA CANTIDAD QUE CUBRE A LA FECHA EL IMPORTE MI <br> 
                        SALARIO, TIEMPO EXTRA, SEPTIMO DIA, Y TODAS LAS <br>
                        PERCEPCIONES Y PRESTACIONES A QUE TENGO DERECHO SIN QUE <br>
                        SE ME ADEUDE ALGUNA CANTIDAD POR OTRO CONCEPTO.
                    </td>
                    <td ><br><br> ____________________________
                        <br>FIRMA DE EMPLEADO
                    </td>
                    <td>Neto a Pagar:</td>
                    <td>1234.56</td>
                </tr>

            </table>
        </form><!--form-->
    </div><!--contenedor general-->
</body>
</html>