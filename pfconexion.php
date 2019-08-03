<?php
$db=new mysqli("localhost","root","","autos");
if(mysqli_connect_errno()){
    echo '<p>Error: no se pudo conectar a la BD.<br/>Por favor intenta nuevamente mas tarde</p>';
    exit;
}
?>