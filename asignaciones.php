<div class="px-4 my-10 max-w-3xl mx-20 space-y-5">
	<div class="flex space-x-4">
		<div class="w-1/4">
			<label for="dni">DNI:</label>
			<input type="text" placeholder="DNI" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
		</div>
		<div class="w-1/3">
			<label for="apelnom">Nombre o Apellido:</label>
			<input type="text" placeholder="Nombre Apellido" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
		</div>
		<div class="w-1/3">
			<label for="rup">RUP:</label>
			<input type="text" placeholder="RUP" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
		</div>
		<div class='mt-auto'>
			<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded-full">Buscar</button>
		</div>
	</div>
	<div class="flex">
		<ul>
			<?php 
				$consulta = 'SELECT * FROM asignaciones';
				$resultado = $conexion->query($consulta);
				$filas = $resultado->rowCount();
				$registro = $resultado->fetchAll();
				foreach ($registro as $asignacion) {
					$id_vacunatorio = $asignacion['Id_vacunatorio'];
					$dni = $asignacion['DNI'];
					echo '<li> Vacunatorio: '.$id_vacunatorio.' - DNI Enfermero: '.$dni.'</li>';
				}
			
			?>
		</ul>
	</div>
</div>