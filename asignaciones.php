<div class="border-2 border-blue-400 rounded-xl shadow-lg p-4 ml-10 mr-10">
			<div class="grid grid-cols-2">
				<div class="text-xl text-left">Asignación de Vacuntorios</div>
				<div class="text-xl text-right"><i class="fa fa-user-circle-o" style="font-size:26px;color:#60A5FA"></i><?php echo ' ' . $apelnom ?></div>
			</div>
</div>

<div class="px-4 my-10 max-w-4xl mx-10 space-y-5">
	<div class="flex space-x-4">
		<div class="w-1/4">
			<label for="dni">DNI:</label>
			<input type="text" placeholder="DNI" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
		</div>
		<div class="w-1/2">
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
		<div>
			<table class="shadow-lg bg-white table-fixed">
				<tr>
					<th class="bg-blue-100 border text-left w-1/4 px-8 py-2">DNI</th>
					<th class="bg-blue-100 border text-left w-1/2 px-8 py-2">Nombre y Apellido</th>
					<th class="bg-blue-100 border text-left w-1/4 px-8 py-2" colspan=2>RUP</th>
				</tr>

				<?php
				$consulta = "SELECT * FROM usuarios INNER JOIN enfermeros on usuarios.Id = enfermeros.Id_usuario";
				$resultado = $conexion->query($consulta);
				$registro = $resultado->fetchAll();
				foreach ($registro as $dato) {
					echo '<tr><td class="border px-8 py-3">' . $dato['DNI'] . '</td><td class="border px-8 py-3">' . $dato['apelnom'] . '</td><td class="border px-8 py-3">' . $dato['RUP'] . '</td><td class="border px-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full" formnovalidate> Asignar </button></td></tr>';
				}
				?>
			</table>
		</div>
		<div class="ml-2 w-80">
			<table class="shadow-lg bg-white table-fixed">
				<tr>
					<th class="bg-blue-100 border text-left px-8 py-2">Vacunatorio</th>
				</tr>

				<?php
				$consulta = "SELECT * FROM centros INNER JOIN vacunatorios on vacunatorios.Id_centro=centros.Id";
				$resultado = $conexion->query($consulta);
				$filas = $resultado->rowCount();
				$registro = $resultado->fetchAll();
				foreach ($registro as $dato) {
					echo '<tr><td class="border px-2">'.' <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> '.$dato['nom'] . '</td></tr>';
				}
				?>
			</table>
		</div>
	</div>
</div>
