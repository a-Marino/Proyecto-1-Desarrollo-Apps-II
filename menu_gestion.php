<div class="relative min-h-screen flex m-0 p-0">
	<!-- SIDEBAR !-->
	<div class="bg-gray-200 w-56">
		<!-- ROL !-->
		<img src="imagenes/gestor.svg" class="w-28 flex m-auto mt-4">
		<!-- NAV !-->
		<nav class="flex flex-col items-center h-screen">
			<div class="flex flex-col">
					<div class="flex-1 group cursor-help relative">
								 <img src="imagenes/pregunta.svg" class="w-28 flex m-auto mt-4">
										<div class="opacity-0 w-28 bg-blue-100 text-grey text-center
										text-xs rounded-lg py-2 absolute z-10 group-hover:opacity-100 bottom-full
										-right-1/1 ml-14 px-3 pointer-events-none lg:-mt-8">

										En el perfil de enfermeros/as se puede ver la información vinculada a los ciudadanos en los vacunatorios en los que usted trabaja
											</svg>
										</div>
									</div>

				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400">Boton 1</button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400">Boton 2</button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400">Boton 3</button>
			</div>
			<div class="mt-auto">
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="logout" formnovalidate=""><img src="imagenes/cerrar.png" class="w-16 m-auto"></button>
			</div>
		</nav>
	</div>

	<!-- CONTENIDO !-->
	<div class="flex-1 p-10">
		<div class="border-2 border-blue-600 rounded-xl shadow-lg p-4 ml-10 mr-10">
			<h2 class="text-2xl text-center"><?php echo $apelnom ?><h2>
		</div>
		<?php
			// SWITCH CON BOTONES
		?>
	</div>
</div>
