<div id="form-reg-vacunacion" class="px-4 my-10 max-w-3xl mx-24 space-y-5">
		<form action="" method="">
			<!-- Una vez creada la base de datos y conectada con PHP, agregar los values !-->
			<div class="flex justify-between">
				<div>
					<h1 class="text-4xl font-semibold mb-2">Registrar Vacunado</h1>
					<p class="text-sm text-gray-400">Ingresa los datos del paciente vacunado aqui</p>
				</div>
			</div>
			<div class="flex space-x-4">
				<div class="w-1/4">
					<label for="DNI">DNI:</label>
					<input type="number" name="DNI" id="DNI_vacunado" class="border border-gray-400 block py-2 px-4 rounded w-full" required placeholder="12.345.678">
				</div>
				<div class="w-1/2">
					<label for="apelnombre">Nombre y Apellido:</label>
					<input type="text" name="apelnombre" id="nombre_vacunado" class="border border-gray-400 block py-2 px-4 rounded w-full" pattern="[A-Za-z0-9ÑñáéíóúÁÉÍÓÚüÜ´ ]+" required placeholder="Ignacio Ramirez">
				</div>
			</div>
			<div class="flex space-x-4">
				<div class="w-1/4">
					<label for="edad">Edad:</label>
					<input type="number" name="edad" id="edad_vacunado" class="border border-gray-400 block py-2 px-4 rounded w-full" required placeholder="60">
				</div>
				<div class="w-1/2">
					<label for="domicilio">Domicilio:</label>
					<input type="text" name="domicilio" id='domicilio_vacunado' class="border border-gray-400 block py-2 px-4 rounded w-full" pattern="[A-Za-z0-9ÑñáéíóúÁÉÍÓÚüÜ´ ]+" required placeholder="Belgrano 123">
				</div>
			</div>
			<div class="flex space-x-4">
				<div class="w-1/4">
					<label for="grupo_riesgo">Grupo de riesgo:</label>
					<select name="grupo_riesgo" id="grupo_riesgo" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="w-1/2">
					<label for="tipo_vacuna">Tipo de vacuna:</label>
					<select name="tipo_vacuna" id="tipo_vacuna" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
						<!-- Cambiar estas opciones una vez este la base de datos y todo conectado !-->
						<option value="vac1">Vacuna 1</option>
						<option value="vac2">Vacuna 2</option>
						<option value="vac3">Vacuna 3</option>
					</select>
				</div>
			</div>
			<div class="flex space-x-4">
				<div class="w-1/2">
					<label for="id_vacunatorio1">Vacunatorio primera dosis</label>
					<select name="id_vacunatorio1" id="id_vacunatorio1" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
						<!-- Cambiar estas opciones una vez este la base de datos y todo conectado !-->
						<option value="id1">Vacunatorio 1</option>
						<option value="id2">Vacunatorio 2</option>
						<option value="id3">Vacunatorio 3</option>
					</select>
				</div>
			</div>
			<button type="submit" name='boton' value='' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2" id='btn-registrar-vacunado'>
		        	Registrar Vacunado
		    </button>
		</form>
</div>

