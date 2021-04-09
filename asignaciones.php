<div class="px-4 my-10 max-w-3xl mx-24 space-y-5">
	<div class="flex space-x-4">
		<div class="w-1/2">
			<label for="enfermero">Enfermero: </label>
				<select name="enfermero" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
					<option value="">Seleccionar un enfermero</option>
					<?php
					    $consulta = "SELECT * FROM usuarios WHERE role = 'enf'";
					    $resultado = $conexion->query($consulta);
					    $registro = $resultado->fetchAll();
					    foreach ($registro as $enf) {
					    	$apelnom = $enf['apelnom'];
					    	$rup = $enf['RUP'];
					    	echo "<option value=$rup >  $apelnom </option>";
					    }
					?>
				</select>
			</div>
		<div class="w-1/2">
			<label for="centro">Centro de Vacunacion:</label>
				<select name="centro" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
					<option value="">Seleccionar un Centro de vacunacion:</option>
					<?php 
						$consulta = "SELECT * FROM centros";
						$resultado = $conexion->query($consulta);
						$registro = $resultado->fetchAll();
						foreach ($registro as $centro) {
							$nom = $centro['nom'];
							$id = $centro['id'];
							echo "<option value=$id >  $nom </option>";
						}
					 ?>    
				</select>
		</div>
	</div>
	<button type="submit" name='boton' value='' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
	    Asignar enfermero
	</button>
	<button type="submit" name='boton' value='' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
	    Desasignar enfermero
	</button>
</div>