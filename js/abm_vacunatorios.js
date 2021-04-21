//tabla
$(buscar_vacunatorios());

function buscar_vacunatorios(consulta){
    $.ajax({
        url: 'Tablas_administrador/tabla-vacunatorios.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta:consulta},
    })

    .done(function(respuesta){
        $("#tabla_vacunatorios").html(respuesta);
    })

    .fail(function(){
        console.log("error en la busqueda");
    })
}


$(document).on('keyup', '#caja_busqueda', function(){
    var valor = $(this).val();
    if(valor != ""){
        buscar_vacunatorios(valor);
    }else{
        buscar_vacunatorios();
    }
})
