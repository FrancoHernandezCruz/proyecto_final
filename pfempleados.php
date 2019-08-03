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
    <title>Empleados</title>
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
    <!------------------------------------------------------------------------------------------------------------->
    <div id="contenedor"><!--contenedor general-->
        <form id="nuevo_empleado" method="POST" class="nuevo"><!--div nuevo empleado-->
            <legend>Nuevo Empleado</legend><hr color="white">
            <table class="tabla_nuevo_emp" >
                <tr>
                    <td><label for="nombre">Nombre</label></td>
                    <td><input type="text" placeholder="Nombre" name="nombre_empleado"id="nombre_empleado"></td>
                    <td><label for="a_p_empleado">Apellido Paterno</label></td>
                    <td><input type="text" placeholder="Apellido Paterno" name="a_p_empleado" id="a_p_empleado"></td>
                </tr>

                <tr>
                    <td><label for="a_m_empleado">Apellido Materno</label></td>
                    <td><input type="text" placeholder="Apellido Materno" name="a_m_empleado" id="a_m_empleado"></td>
                    <td><label for="rfc">RFC</label></td>
                    <td><input type="text" placeholder="RFC" name="rfc_empleado" id="rfc_empleado"></td>
                    
                </tr>

                <tr>                   
                    <td><label for="correo">Correo Electrónico</label></td>
                    <td><input type="email" placeholder="Correo Electrónico" name="correo_empleado" id="correo_empleado"></td>
                    <td><label for="contrasena">Contraseña</label></td>
                    <td><input type="password" placeholder="Contraseña" name="contra_empleado" id="contra_empleado"></td>                    
                </tr>
                <tr>
                    <td><label for="sucursal">Sucursal</label></td>
                    <td>
                        <select name="s_sucursal" id="s_sucursal">
                            <option value="sucursal" selected="selected" disabled="disabled">Sucursal</option>
                            
                            <?php 
                            $consulta="SELECT * FROM sucursal";
                            $ejecutar=mysqli_query($db,$consulta) or die (mysqli_error($db));
                            ?>
                            
                            <?php foreach ($ejecutar as $opciones): ?>
                            <option value="<?php echo $opciones ['id_sucursal'] ?>"><?php echo $opciones ['nombre'] ?></option>
                            
                            <?php endforeach ?>
                            <!--<option value="s1">1</option>
                            <option value="s2">2</option>
                            <option value="s3">3</option>-->
                        </select>
                    </td>
                    <td><label for="">Tipo de usuario</label></td>
                    <td>
                        <select name="tipo_user" id="tipo_user">
                            <option value="user" selected="selected" disabled="disabled">Usuario</option>
                            <option value="1">Gerencia</option>
                            <option value="2">Ventas</option>
                            <option value="3">Servicio</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <div id="cont_botones">
            <button id="agregar_empleado" class="botones">Agregar</button><div id="space"></div>
            <button id="cancelar_empleado" class="botones">Cancelar</button>
            </div>

        </form><!--div nuevo_empleado-->


        <!--Tabla de empleados-->
        <div id="div_empleado" class="tablita"><!--div empleado-->
            <legend>Empleados</legend>
            <input type="text" placeholder="Busqueda" id="buscar"><button id="buscar_boton" class="botones">Buscar</button><br><br>
            <table class="tabla_emp">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Correo</td>
                        <td>Usuario</td>
                        <td>Estado</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    /*Actualización de tabla empleados */
                    
                    $query="SELECT * FROM empleados LIMIT 5";
                    $result=mysqli_query($db,$query);
                    while($mostrar=mysqli_fetch_array($result)){
                        if($mostrar['tipo_usuario']== "1")
                        {
                            $mostrar['tipo_usuario']="Gerencia";
                        }
                        else if($mostrar['tipo_usuario']== "2")
                        {
                            $mostrar['tipo_usuario']="Ventas";   
                        }
                        else if($mostrar['tipo_usuario']== "3")
                        {
                            $mostrar['tipo_usuario']="servicio";
                        }
                    ?>
                    <tr>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['correo'] ?></td>
                        <td><?php echo $mostrar['tipo_usuario'] ?></td>
                        <td><?php //echo $mostrar[''] ?>1</td>
                        <td><a href=""><img src="modify.png" class="md" alt=""></a><a href=""><img src="delete.png" class="md" alt=""></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div><!--div empleado-->
    </div><!--contenedor general-->
    <script src="pfempleados.js"></script>   
</body>
</html>