<?php
include ('pfconexion.php');
//echo $_POST;
//var_dump($_POST);
//$accion=0;
//$ccion=$_POST['ac'];
//var_dump(json_decode($_POST));
//echo $_POST;
if($_POST>0)
{

        

        //-----------------Acción de alta de empleados----------------------        
        $nombre_e=$_POST['nombre_empleado'];
        $apell_p=$_POST['a_p_empleado'];
        $apell_m=$_POST['a_m_empleado'];
        $rfc=$_POST['rfc_empleado'];
        $sucursal = (is_numeric($_POST['s_sucursal']) ? (int)$_POST['s_sucursal'] : 0);
        $correo=$_POST['correo_empleado'];
        $contra=$_POST['contra_empleado'];
        $usuario = (is_numeric($_POST['tipo_user']) ? (int)$_POST['tipo_user'] : 0);
        echo $nombre_e,$apell_p,$apell_m,$rfc,$sucursal,$correo,$contra,$usuario;

        if (count($_POST)==8)
        {
            echo'tambien llegaste hasta aca compa, relax';
            $query ="INSERT INTO `empleados`( `id_empleado`,`id_sucursal`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `contra`, `RFC`, `tipo_usuario`) VALUES (NULL,?,?,?,?,?,?,?,?)";
            $stmt=$db->prepare($query);
            $stmt->bind_param('issssssi',$sucursal,$nombre_e,$apell_p,$apell_m,$correo,$contra,$rfc,$usuario);
            $stmt->execute();            
            if  ($stmt->affected_rows>0)
            {
                echo 1;
            }
            else
            {
                echo 'no haz registrado';
                
            }
        }
        else
        {
            echo "no son 8 valores compa";
        }
        

    }
    
    
    
    
    




?>