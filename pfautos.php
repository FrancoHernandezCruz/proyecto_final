<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pfdesign.css">
    <title>Automóviles</title>
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
        <div id="nuevo_auto" class="nuevo"><!--div nuevo auto-->
            <legend>Nuevo Automóvil</legend><hr color="white">
            <div id="divtabla">
            <table class="tabla_nuevo_auto" >
                <tr>
                    <td><label for="">Marca</label></td>
                    <td>
                        <select name="marca" id="s_marca">
                            <option value="v-marca" selected="selected" disabled="disabled">Marca</option>
                            <option value="toy">Toyota</option>
                            <option value="bmw">BMW</option>
                            <option value="vw">VW</option>
                            <option value="bug">Bugatti</option>
                            <option value="mas">Maserati</option>
                        </select>
                    </td>
                    <td><label for="">Modelo</label></td>
                    <td><input type="text" placeholder="Modelo" id="modelo_auto"></td>
                </tr>
                <tr>
                    <td><label for="">Año</label></td>
                    <td><input type="text" placeholder="Año" id="yaer_auto"></td>
                    <td><label for="">Precio</label></td>
                    <td><input type="text" placeholder="Precio" id="precio_auto"></td>
                </tr>
            </table>
            </div>
            <br>
            <div id="cont_botones">
                    <button id="agregar_auto" class="botones">Agregar</button><div id="space"></div>
                    <button id="cancelar_empleado" class="botones">Cancelar</button>
                </div>

        </div><!--div nuevo_auto-->



        <div id="div_auto" class="tablita"><!--div auto-->
            <legend>Automóviles</legend>
            <input type="text" placeholder="Busqueda" id="buscar"><button id="buscar_boton" class="botones">Buscar</button><br><br>
            <table class="tabla_auto">
                <thead>
                    <tr>
                        <td>Marco</td>
                        <td>Modelo</td>
                        <td>Año</td>
                        <td>Precio</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Toyota</td>
                        <td>Tacoma</td>
                        <td>2017</td>
                        <td>$350,000.00</td>
                        <td><img src="modify.png" class="md" alt=""><img src="delete.png" class="md" alt=""></td>
                    </tr>
                </tbody>
            </table>
        </div><!--div auto-->
    </div><!--contenedor general-->
</body>
</html>