<div class="relative min-h-screen flex m-0 p-0">
	<!-- SIDEBAR !-->
	<div class="bg-gray-200 w-56">
		<!-- ROL !-->
		<img src="imagenes/enfermeros.png" alt="enfermero" class="w-36 flex m-auto mt-4">
		<!-- NAV !-->
		<nav class="flex flex-col items-center h-screen">
			<div class="flex flex-col">
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="registrar-vacunado"><img src="imagenes/gestor.png" class="w-16 m-auto"><span>Registrar Vacunado</span></button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton">Boton 2</button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400">Boton 3</button>
			</div>
			<div class="mt-auto">
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="logout" formnovalidate><img src="imagenes/cerrar.png" class="w-16 m-auto"></button>
			</div>
		</nav>
	</div>

	<!-- CONTENIDO !-->
	<div class="flex-1 mt-5">
		<div class="border-2 border-blue-600 rounded-xl shadow-lg p-4 ml-10 mr-10">
			<h1 class="text-3xl text-center font-bold">
				Vacunatorio N°: <?php 
									echo $Id_vacunatorio;
								?>	
			</h1>
			<h2 class="text-2xl text-center"><?php echo $apelnom ?><h2>
		</div>
		<?php 
			if ($boton == 'registrar-vacunado') {
				require_once 'registro-vacunados.php';
			}

			if ($boton == 'abm-prueba') {
				require_once 'prueba_abm.php';
			}
		?>
	</div>
</div>

