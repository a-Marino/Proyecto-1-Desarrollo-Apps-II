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
				<button name='botonApp' value='graba_vacuna' class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2" id='btn-registrar-vacunado'>
			        	Grabar
			    </button>
			</div>
		</div>
<!--TABLA-->
<input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="BUSCAR" class="rounded w-full py-2 px-4 border border-gray-400">

<div id="tabla_vacunas" class="max-w-4xl"></div>


</div>
