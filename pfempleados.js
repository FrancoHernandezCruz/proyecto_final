$(document).ready(function () {
    let error_empleado_nombre =true;
    let error_empleado_apellidop=true;
    let error_empleado_apellidom=true;
    let error_empleado_rfc =true;
    let error_empleado_correo=true;
    let error_empleado_sucursal =true;
    let error_empleado_contra=true;
    let error_empleado_tipouser=true;
    /*Validación de campos de formulario */

    $("#nombre_empleado").focusout(function (e) { 
        e.preventDefault();
        if($("#nombre_empleado").val()=="")
        {
            $("#nombre_empleado").addClass("error");
            error_empleado_nombre = true;
        }
        else
        {
            $("#nombre_empleado").removeClass("error");
            error_empleado_nombre = false;
        }        
    });

    $("#a_p_empleado").focusout(function (e) { 
        e.preventDefault();
        if($("#a_p_empleado").val()=="")
        {
            $("#a_p_empleado").addClass("error");
            error_empleado_apellidop = true;
        }
        else
        {
            $("#a_p_empleado").removeClass("error");
            error_empleado_apellidop = false;
        }
    });

    $("#a_m_empleado").focusout(function (e) { 
        e.preventDefault();
        if($("#a_m_empleado").val()=="")
        {
            $("#a_m_empleado").addClass("error");
            error_empleado_apellidom = true;
        }
        else
        {
            $("#a_m_empleado").removeClass("error");
            error_empleado_apellidom = false;
        }
    });

    $("#rfc_empleado").focusout(function (e) { 
        e.preventDefault();
        if($("#rfc_empleado").val()=="")
        {
            $("#rfc_empleado").addClass("error");
            error_empleado_rfc =true;
        }
        else
        {
            $("#rfc_empleado").removeClass("error");
            error_empleado_rfc =false;
        }
    });

    $("#correo_empleado").focusout(function (e) { 
        e.preventDefault();
        if($("#correo_empleado").val()=="")
        {
            $("#correo_empleado").addClass("error");
            error_empleado_correo = true;
        }
        else
        {
            $("#correo_empleado").removeClass("error");
            error_empleado_correo = false;
        }
    });
    /*Acción del boton registrar */
    $("#contra_empleado").focusout(function (e) { 
        e.preventDefault();
        if($("#contra_empleado").val()=="")
        {
            $("#contra_empleado").addClass("error");
            error_empleado_contra = true;
        }
        else
        {
            $("#contra_empleado").removeClass("error");
            error_empleado_contra = false;
        }
    });

    $("#s_sucursal").on('change', function () {
        //$("#s_sucursal").addClass("error");
        error_empleado_sucursal = false;
    });

    $("#tipo_user").on('change', function () {
        error_empleado_tipouser = false;
        
    });

    $("#agregar_empleado").click(function (e) { 
        let datosempleado=$("#nuevo_empleado").serialize();
        //alert('hasta aqui vamos compa x2');
        if(error_empleado_nombre == false && error_empleado_apellidop == false && error_empleado_apellidom == false && error_empleado_correo == false && error_empleado_contra == false && error_empleado_rfc == false && error_empleado_sucursal == false && error_empleado_tipouser == false)
        {
            $.post("pfaltas.php", datosempleado,
                function (data, textStatus, jqXHR) {
                    //alert('hasta aqui vamos compa')
                    
                    //alert(data);
                    console.log(data);
                    if(data=="1")
                    {
                        alert('¡Empleado registrado!')
                        $("#nuevo_empleado")[0].reset();
                    }
                    else
                    {
                        alert('error compa, cambiate a gastro o turismo mejor')
                    }

                }
            );
        }
        else
        {
            alert('error fatal compa, ingresa datos');
            //console.log('error fatal compa');
            
        }

        e.preventDefault();
        
    });

    $("#cancelar_empleado").click(function (e) { 
        e.preventDefault();
        $("#nuevo_empleado")[0].reset();
        
    });



    /*Filtro de busqueda para tabla empleados */

    $("#buscar").on("keyup", function () {
        llena_tabla($("#buscar").val());
    });

    function llena_tabla(filtro="")
    {
        $("#div_empleado").load("pftabla.php", {
            nombre:filtro
        }, function (response, status, request) {
            this; // dom element            
        });
        
    }



    /*$("#s_sucursal").focus(function (e) { 
        e.preventDefault();
        if ($('#s_sucursal').val().trim() === '')
        {

        }
    });*/
});