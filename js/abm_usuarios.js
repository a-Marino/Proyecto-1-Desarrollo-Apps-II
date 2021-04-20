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
