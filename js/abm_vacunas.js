//tabla
$(buscar_vacunas());

function buscar_vacunas(consulta){
    $.ajax({
        url: 'Tablas_administrador/tabla-vacunas.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta:consulta},
    })

    .done(function(respuesta){
        $("#tabla_vacunas").html(respuesta);
    })

    .fail(function(){
        console.log("error en la busqueda");
    })
}


$(document).on('keyup', '#caja_busqueda', function(){
    var valor = $(this).val();
    if(valor != ""){
        buscar_vacunas(valor);
    }else{
        buscar_vacunas();
    }
})
