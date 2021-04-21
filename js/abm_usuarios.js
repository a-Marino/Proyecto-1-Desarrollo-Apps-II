
//tabla
$(buscar_datos());

function buscar_datos(consulta){
    $.ajax({
        url: 'Tablas_administrador/tabla-usuario.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta:consulta},
    })

    .done(function(respuesta){
        $("#tabla_usuarios").html(respuesta);
    })

    .fail(function(){
        console.log("error en la busqueda");
    })
}


$(document).on('keyup', '#caja_busqueda', function(){
    var valor = $(this).val();
    if(valor != ""){
        buscar_datos(valor);
    }else{
        buscar_datos();
    }
})




$('#rol').change(()=>{
	let rol = $('#rol').val();
	console.log(rol);

	if (rol == 'enf') {
		$('#div_rup').show();
		$('#div_tele').show();
		$('#div_clave').removeClass('w-1/2').addClass('w-1/4');
		$('#div_roles').removeClass('w-1/2').addClass('w-1/4');
		$('#rup').prop('required', true);
		$('#telefono').prop('required', true);
	} else {
		$('#div_rup').hide();
		$('#div_tele').hide();
		$('#div_clave').removeClass('w-1/4').addClass('w-1/2');
		$('#div_roles').removeClass('w-1/4').addClass('w-1/2');
		$('#rup').prop('required', false);
		$('#telefono').prop('required', false);
	}
});
