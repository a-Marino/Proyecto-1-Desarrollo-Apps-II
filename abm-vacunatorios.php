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
			<button name='botonApp' value='graba_vacunatorio' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2" >
	        	Grabar
		    </button>
		</div>
	</div>

<!--TABLA-->

<input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="BUSCAR" class="rounded w-full py-2 px-4 border border-gray-400">

<div id="tabla_vacunatorios" class="max-w-4xl"></div>

</div>
