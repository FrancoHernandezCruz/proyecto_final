$(document).ready(function () {
    let error_codigo_articulo = true;
    let error_precio_articulo = true;
    let error_descripcion_articulo = true;

    /*Acciones varias */
    function limpiar()
  {
    $(":input").each(function(){	
        $($(this)).val('');            
    });
  }

     /*Validación de campos de formulario */

$("#codigo_articulo").focusout(function (e) { 
    e.preventDefault();
    if($("#codigo_articulo").val()=="")
    {
        $("#codigo_articulo").addClass("error");
        error_codigo_articulo = true;
    }
    else
    {
        $("#codigo_articulo").removeClass("error");
        error_codigo_articulo = false;
    }
});

$("#precio_articulo").focusout(function (e) { 
    if($("#precio_articulo").val()=="")
    {
        $("#precio_articulo").addClass("error");
        error_precio_articulo = true;
    }
    else
    {
        $("#precio_articulo").removeClass("error");
        error_precio_articulo = false;
    }
    e.preventDefault();
    
});

$("#descripcion_articulo").focusout(function (e) { 
    e.preventDefault();
    if($("#descripcion_articulo").val()=="")
    {
        $("#descripcion_articulo").addClass("error");
        error_descripcion_articulo = true;
    }
    else
    {
        $("#descripcion_articulo").removeClass("error");
        error_descripcion_articulo = false;
    }
    
});

$("#agregar_articulo").click(function (e) { 
    let datosarticulo=$("#nuevo_articulo").serialize();
    console.log(typeof datosarticulo);
    /*let ac=2;
    let object = {datosarticulo:datosarticulo, ac:ac}
    let dataobject =JSON.stringify(object);*/


    if(error_codigo_articulo == false && error_descripcion_articulo == false && error_precio_articulo == false)
    {
        $.post("pfaltas.php", datosarticulo,
            function (data, textStatus, jqXHR) {
                if(data=="1")
                {
                    alert('¡Articulo registrado!');
                    $("#id_form")[0].reset();
                    //limpiar();
                    $("#nuevo_articulo")[0].reset();
                }
                else
                {
                    alert('Error alv compa');
                }
                
                //alert(data);
                //console.log(data);


            }
        );
    }
    else
    {
        alert('error fatal compa')
    }
    e.preventDefault();
    
});

$("#nuevo_articulo").submit(function (e) { 
    e.preventDefault();
    
});

$("#cancelar_articulo").click(function (e) { 
    $("#nuevo_articulo")[0].reset();
    e.preventDefault();
    
});


});