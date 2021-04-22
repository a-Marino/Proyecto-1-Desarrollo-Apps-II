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
				<button name='botonApp' value='graba_usuario' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2" id='btn-registrar-vacunado'>
					Grabar
				</button>
			</div>
		</div>
	</div>
<!--tabla-->

<input type="text" name="buscar_usuarios" id="buscar_usuarios" placeholder="BUSCAR" class="rounded w-full py-2 px-4 border border-gray-400">

<div id="tabla_usuarios" class="max-w-4xl"></div>


</div>