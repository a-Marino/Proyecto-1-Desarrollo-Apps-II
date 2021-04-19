<div class="border-2 border-blue-400 rounded-xl shadow-lg p-4 ml-10 mr-10">
	<div class="grid grid-cols-2">
		<div class="text-xl text-left">ABM Vacunatorios</div>
		<div class="text-xl text-right"><i class="fa fa-user-circle-o" style="font-size:26px;color:#60A5FA"></i><?php echo ' ' . $apelnom ?></div>
	</div>
</div>
<div class="px-4 my-10 max-w-4xl mx-24 space-y-5">
<div>
	<div class="flex space-x-4">
		<div class="w-1/2">
			<label for="medico">Medico</label>
			<input type="text" name="medico"  class="border border-gray-400 block py-2 px-4 rounded w-full" required>
		</div>
		<div class="w-1/2">
			<label for="horario">Horario</label>
			<input type="text" name="horario"  class="border border-gray-400 block py-2 px-4 rounded w-full" required>
		</div>
	</div>
	<div class="flex space-x-4">
		<div class="w-1/2">
			<label for="telefono"telefono>Telefono</label>
			<input type="number" name="telefono"  class="border border-gray-400 block py-2 px-4 rounded w-full" required>
		</div>
		<div class="w-1/2">
			<label for="clave">Centro</label>
			<select name="centro"  class="border border-gray-400 block py-2 px-4 rounded w-full" required >
				<?php
					$consulta = "SELECT * FROM centros";
					$resultado = $conexion->query($consulta);
					$centros = $resultado->fetchAll();

					foreach($centros as $centro){
						$IdCentros = $centro['Id'];
						$nomCentro =$centro['nom'];
						echo "<option value=$IdCentros> $nomCentro </option>";
					}
				?>
			</select>
		</div>
	</div>
</div>
	<div class="flex space-x-5 justify-center mt-5">
		<div class="w-1/4">
			<button name='boton' value='buscar_vacunatorio' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
	        	Buscar
		    </button>
		</div>
		<div class="w-1/4">
			<button name='boton' value='graba_vacunatorio' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2" >
	        	Grabar
		    </button>
		</div>
	</div>
</div>
<!--TABLA-->
	<div class="flex">
		<div>
			<table class="shadow-lg bg-white table-fixed" >
				<tr>
					<th class="bg-blue-100 border text-left w-1/4 px-8 py-2">Centro</th>
					<th class="bg-blue-100 border text-left w-1/2 px-8 py-2">Horario</th>
					<th class="bg-blue-100 border text-left w-1/2 px-8 py-2">Medico</th>
					<th class="bg-blue-100 border text-left w-1/4 px-8 py-2" >Telefono</th>
					<th class="bg-blue-100 border text-left w-1/2 px-8 py-2">Estado</th>
					<th class="bg-blue-100 border text-left w-1/2 px-8 py-2"></th>
					<th class="bg-blue-100 border text-left w-1/2 px-8 py-2"></th>
				</tr>
				<?php
					$consulta = "SELECT * FROM `vacunatorios` INNER JOIN centros ON vacunatorios.Id_centro = centros.Id;";
					$resultado = $conexion->query($consulta);
					$registro = $resultado->fetchAll();
					foreach ($registro as $dato) {
						echo '<tr><td  class="border px-8 py-3">' . $dato['nom'] . '</td><td class="border px-8 py-3">' .$dato['horario'].'</td><td class="border px-8 py-3">'. $dato['medico'] . '</td><td class="border px-8 py-3">' . $dato['Id_centro'] .'</td><td class="border px-8 py-3">'. ($dato['disable'] == 0 ? 'Habilitado' : 'Deshabilitado') . '</td><td class="border px-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full" formnovalidate> Bloquear </button></td><td class="border px-2"><button name="boton" value="edit_vacunatorio"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full" formnovalidate> Editar </button></td></tr>';
					}
				?>
			</table>
		</div>
	</div>
</div>
