<div class="relative min-h-screen flex m-0 p-0">
	<!-- SIDEBAR !-->
	<div class="bg-gray-200 w-56">
		<!-- ROL !-->
		<img src="imagenes/gestor.png" class="w-28 flex m-auto mt-4">
		<!-- NAV !-->
		<nav class="flex flex-col items-center h-screen">
			<div class="flex flex-col">
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