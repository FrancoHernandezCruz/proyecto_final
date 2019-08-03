<?php
$nombre="%".$_POST["nombre"]."%";
$db=new mysqli("localhost","root","","autos");
if(mysqli_connect_errno()){
    echo '<p>Error: no se pudo conectar a la BD.<br/>Por favor intenta nuevamente mas tarde</p>';
    exit;
}

$query="SELECT * FROM empleados WHERE nombre like ?";
$stmt=$db->prepare($query);
$stmt->bind_param('s', $nombre);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($idE,$idSuc,$nombreE,$apellpE,$apellmE,$correoE,$contraE,$rfcE,$tipouserE);



?>
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
                    while($stmt->fetch())
                    {
                        if($tipouserE== "1")
                        {
                            $tipouserE="Gerencia";
                        }
                        else if($tipouserE== "2")
                        {
                            $tipouserE="Ventas";   
                        }
                        else if($tipouserE== "3")
                        {
                            $tipouserE="servicio";
                        }
                    
                    ?>
                    <tr>
                    <td><?= $nombreE ?></td>
                    <td><?= $correoE ?></td>
                    <td><?= $tipouserE ?></td>
                    <td><?php ?>1</td>
                    <td><a href=""><img src="modify.png" class="md" alt=""></a><a href=""><img src="delete.png" class="md" alt=""></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>