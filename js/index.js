const btn_inicio_sesion = document.querySelector('#btn-inicio-sesion');
const div_inicio_registro = document.querySelector('#inicio-registro');
const div_inicio_sesion = document.querySelector('#inicio-sesion');

btn_inicio_sesion.addEventListener('click', ()=>{
	div_inicio_registro.style.display = 'none';
	div_inicio_sesion.hidden = false;
});

