<div class="relative min-h-screen flex m-0 p-0">
	<!-- SIDEBAR !-->
	<div class="bg-gray-200 w-56">
		<!-- ROL !-->
		<img src="imagenes/admin.png" class="w-28 flex m-auto mt-4">
		<!-- NAV !-->
		<nav class="flex flex-col items-center h-screen">
			<div class="flex flex-col">
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="asignaciones">Asignaciones</button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="abm-usuario">Agregar Usuarios</button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="abm-vacunas">Agregar Vacunas</button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="abm-vacunatorios">Agregar Vacunatorios</button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="abm-centros">Agregar Centros de vacunacion</button>
			</div>
			<div class="mt-auto">
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="logout" formnovalidate><img src="imagenes/cerrar.png" class="w-16 m-auto"></button>
			</div>
		</nav>
	</div>

	<!-- CONTENIDO !-->
	<div class="flex-1 p-10">
		<div class="border-2 border-blue-600 rounded-xl shadow-lg p-4 ml-10 mr-10">
			<h2 class="text-2xl text-center"><?php echo $apelnom ?><h2>
		</div>
		<div>
			<?php 
				switch ($boton) {
					case 'asignaciones':
						require_once 'asignaciones.php';
						break;
					case 'abm-usuario':
						require_once 'abm-usuario.php';
						break;
					case 'abm-vacunas':
						require_once 'abm-vacunas.php';
						break;
					case 'abm-vacunatorios':
						require_once 'abm-vacunatorios.php';	
						break;	
					case 'abm-centros':
						require_once 'abm-centros.php';
						break;
				}
			?>
		</div>
	</div>
</div>