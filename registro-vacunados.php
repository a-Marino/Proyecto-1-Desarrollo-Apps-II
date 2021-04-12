<div class="border-2 border-blue-600 rounded-xl shadow-lg p-4 ml-10 mr-10">
			<div class="grid grid-cols-2">
				<div class="text-2xl font-semibold text-left">Registrar Vacunados
				<p class="text-sm text-gray-400">Ingresa los datos del paciente vacunado aqui</p>
			</div>


				<div class="text-xl text-right"><i class="fa fa-user-circle-o" style="font-size:26px;color:blue"></i><?php echo ' ' . $apelnom ?></div>
			</div>
		</div>
		
<div id="form-reg-vacunacion" class="px-4 my-4 max-w-3xl mx-24 space-y-5">
		
			<!-- Una vez creada la base de datos y conectada con PHP, agregar los values !-->

			<div class="flex space-x-4">
				<div class="w-1/4">
					<label for="DNI">DNI:</label>
					<input type="number" name="DNI" id="DNI_vacunado" class="border border-gray-400 block py-2 px-4 rounded w-full" required>
				</div>
				<div class="w-1/2">
					<label for="apelnom_v">Nombre y Apellido:</label>
					<input type="text" name="apelnom_v" id="apelnom_v" class="border border-gray-400 block py-2 px-4 rounded w-full" pattern="[A-Za-z0-9ÑñáéíóúÁÉÍÓÚüÜ´ ]+" required disabled>
				</div>
			</div>
			<div class="flex space-x-4">
				<div class="w-1/4">
					<label for="edad">Edad:</label>
					<input type="number" name="edad" id="edad_vacunado" class="border border-gray-400 block py-2 px-4 rounded w-full" required disabled>
				</div>
				<div class="w-1/2">
					<label for="domicilio">Domicilio:</label>
					<input type="text" name="domicilio" id='domicilio_vacunado' class="border border-gray-400 block py-2 px-4 rounded w-full" pattern="[A-Za-z0-9ÑñáéíóúÁÉÍÓÚüÜ´ ]+" required disabled>
				</div>
			</div>
			<div class="flex space-x-4">
				<div class="w-1/4">
					<label for="grupo_riesgo">Grupo de riesgo:</label>
					<select name="grupo_riesgo" id="grupo_riesgo" class="border border-gray-400 block py-2 px-4 rounded w-full" required disabled>
					    <option value="">Seleccione Tipo</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="w-1/2">
					<label for="tipo_vacuna">Tipo de vacuna:</label>

					<select name="tipo_vacuna" id="tipo_vacuna" class="border border-gray-400 block py-2 px-4 rounded w-full" required disabled>
						<option value="">Seleccionar Tipo de Vacuna</option>
						<?php 
							$consulta = "SELECT * FROM tipo_vacunas ORDER BY nom";
							$resultado = $conexion->query($consulta);
							$registro = $resultado->fetchAll();
							foreach ($registro as $dato) {
								$nom = $dato['nom'];
								$Id = $dato['Id'];
								echo "<option value=$Id > $nom </option>";
							}
						 ?>    
					</select>




				</div>
			</div>

			<div class="flex space-x-4"> 
			    <div class="w-1/3 mt-1"> 
				 <p id="dosis1"> Dosis 1: </p>
				</div>
				<div class="w-1/3 mt-1"> 
				 <p id="dosis2"> Dosis 2: </p>
				</div>
			</div>

			<div class="flex space-x-2">

				<div class="w-1/2 mt-2">


				<?php if($mgraba==1){$mensaje_error="Registro Grabado";}else{$mensaje_error='';} ?>
                <!-- Mensaje de error -------------------------------------------------------------->
                <div class="flex items-center bg-green-400 text-white text-sm font-bold px-4 py-2 <?php if ($mensaje_error == '') {
                                                                                                    echo 'invisible';
                                                                                                } ?>" id="mensaje_vac">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                    </svg>
                    <p id="men_error"><?php echo $mensaje_error; ?></p>
                </div>

				</div>
			</div>

 			<button name='boton' value='graba_vacunado' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2" id='btn-registrar-vacunado'>
		        	Registrar Vacunado
		    </button>
			<input type="hidden" name="turno" id="turno">
	
</div>


