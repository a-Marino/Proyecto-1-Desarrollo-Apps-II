<div class="border-2 border-blue-400 rounded-xl shadow-lg p-4 ml-10 mr-10">
	<div class="grid grid-cols-2">
		<div class="text-xl text-left">ABM Vacunas</div>
		<div class="text-xl text-right"><i class="fa fa-user-circle-o" style="font-size:26px;color:#60A5FA"></i><?php echo ' ' . $apelnom ?></div>
	</div>
</div>
<div class="px-4 my-10 max-w-4xl mx-24 space-y-5">

		<div class="flex space-x-4">
			<div class="w-1/2">
				<label for="nom_vacuna">Nombre Vacuna</label>
				<input type="text" name="nom_vacuna"  class="border border-gray-400 block py-2 px-4 rounded w-full" required>
			</div>
			<div class="w-1/2">
				<label for="cant_dosis">Cantidad de Dosis</label>
				<input type="number" name="cant_dosis"  class="border border-gray-400 block py-2 px-4 rounded w-full" required>
			</div>
			</div>
			<div class="flex space-x-5 justify-center mt-5">
			<div class="w-1/4">
				<button name='boton' value='buscar_vacuna' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
			        	Buscar
			    </button>
			</div>
			<div class="w-1/4">
				<button name='boton' value='graba_vacuna' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2" id='btn-registrar-vacunado'>
			        	Grabar
			    </button>
			</div>
		</div>


		<div class="flex">
		<div>
			<table class="shadow-lg bg-white table-fixed" >
				<tr>
					<th class="bg-blue-100 border text-left w-1/2 px-8 py-2">Nombre de la Vacuna</th>
					<th class="bg-blue-100 border text-left w-1/4 px-8 py-2">Cantidad de Dosis</th>
					<th class="bg-blue-100 border text-left w-1/2 px-8 py-2">Estado</th>
					<th class="bg-blue-100 border text-left w-1/2 px-8 py-2"></th>
					<th class="bg-blue-100 border text-left w-1/2 px-8 py-2"></th>

				</tr>

				<?php
					$consulta = "SELECT * FROM `tipo_vacunas`";
					$resultado = $conexion->query($consulta);
					$registro = $resultado->fetchAll();
					foreach ($registro as $dato) {
						echo '<tr><td  class="border px-8 py-3 text-center">' . $dato['nom'] . '</td><td class="border px-8 py-3 text-center">' .$dato['dosis'].'</td><td class="border px-8 py-3 text-center">'. ($dato['disable'] == 0 ? 'Habilitado' : 'Deshabilitado') . '</td><td class="border px-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full" formnovalidate> Bloquear </button></td><td class="border px-2"><button name="boton" value="edit_vacunatorio"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full" formnovalidate> Editar </button></td></tr>';
					}


				?>
			</table>
		</div>
		
</div>
