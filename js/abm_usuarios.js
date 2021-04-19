
$('#rol').change(()=>{
	let rol = $('#rol').val();
	console.log(rol);

	if (rol == 'enfermero') {
		$('#div_rup').attr('hidden', false);
		$('#div_clave').removeClass('w-1/2').addClass('w-1/4');
	} else {
		$('#div_rup').attr('hidden', true);
		$('#div_clave').removeClass('w-1/4').addClass('w-1/2');
	}
});
