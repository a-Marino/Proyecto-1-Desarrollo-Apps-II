<div class="border-2 border-blue-400 rounded-xl shadow-lg p-4 ml-10 mr-10">
	<div class="grid grid-cols-2">
		<div class="text-xl text-left">ABM Usuarios</div>
		<div class="text-xl text-right"><i class="fa fa-user-circle-o" style="font-size:26px;color:#60A5FA"></i><?php echo ' ' . $apelnom ?></div>
	</div>
</div>
<div class="px-4 my-10 max-w-4xl mx-24 space-y-5">
	<div>
		<div class="flex space-x-4">
			<div class="w-1/4">
				<label for="DNI">DNI</label>
				<input type="number" name="dni" id="DNI_vacunado" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
			</div>
			<div class="w-1/2">
				<label for="apellNom">Apellido y Nombre</label>
				<input type="text" name="nomApell" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
			</div>
			<div class="w-1/2">
				<label for="email">Email</label>
				<input type="email" name="email" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
			</div>
		</div>
		<div class="flex space-x-4 mt-2">
			<div class="w-1/2" id="div_roles">
				<label for="rol">Role</label>
				<select name="rol" id="rol" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
					<option value="enf">Enfermero</option>
					<option value="ges">Gestión</option>
					<option value="adm">Administrador</option>
				</select>
			</div>
			<div class="w-1/4" id="div_rup">
				<label for="rup">Rup</label>
				<input type="number" name="rup" id="rup" class="border border-gray-400 block py-2 px-4 rounded w-full">
			</div>
			<div class="w-1/2" id="div_tele">
				<label for="telefono">Telefono</label>
				<input type="number" name="telefono" class="border border-gray-400 block py-2 px-4 rounded w-full" id="telefono">
			</div>
			<div class="w-1/4" id="div_clave">
				<label for="clave">Clave</label>
				<input type="text" name="clave" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
			</div>
		</div>
		<div class="flex space-x-5 justify-center mt-5">
			<div class="w-1/4">
				<button name='botonApp' value='buscar_usuario' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2">
					Buscar
				</button>
			</div>
			<div class="w-1/4">
				<button name='botonApp' value='graba_usuario' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2" id='btn-registrar-vacunado'>
					Grabar
				</button>
			</div>
		</div>
	</div>

	<div class="flex">
		<div>
			<table class="shadow-lg bg-white table-fixed">
				<tr>
					<th class="bg-blue-100 border text-left w-1/4 px-8 py-2">DNI</th>
					<th class="bg-blue-100 border text-left w-1/2 px-8 py-2">Nombre y Apellido</th>
					<th class="bg-blue-100 border text-left w-1/4 px-8 py-2">Role</th>
					<th class="bg-blue-100 border text-left w-1/4 px-8 py-2" colspan=2>Estado</th>
				</tr>

				<?php
				$consulta = "SELECT * FROM usuarios";
				$resultado = $conexion->query($consulta);
				$registro = $resultado->fetchAll();
				foreach ($registro as $dato) {
					echo '<tr><td class="border px-8 py-3">' . $dato['DNI'] . '</td><td class="border px-8 py-3">' . $dato['apelnom'] . '</td><td class="border px-8 py-3">' .$dato['role']. '</td><td class="border px-2"><button class="'.($dato['disable'] == 1 ? 'bg-red-500 hover:bg-red-700' : 'bg-green-400 hover:bg-green-700').' text-white font-bold py-1 px-2 rounded-full" formnovalidate name="boton" value="disable">'. ($dato['disable'] == 1 ? 'Deshabilitado' : 'Habilitado') .'</button></td><td class="border px-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full" formnovalidate> Editar </button></td></tr>';
				}
				?>
			</table>
		</div>
	</div>
</div>