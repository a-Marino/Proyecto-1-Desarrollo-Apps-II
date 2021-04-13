<div class="relative min-h-screen flex m-0 p-0">
	<!-- SIDEBAR !-->
	<div class="bg-gray-200 w-56">
		<!-- ROL !-->
		<img src="imagenes/gestor.svg" class="w-20 flex m-auto mt-4">
		<!-- NAV !-->
		<nav class="flex flex-col items-center min-h-screen">
			<div class="flex flex-col">

				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" formnovalidate>Boton 1</button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" formnovalidate>Boton 2</button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" formnovalidate>Boton 3</button>
			</div>
			<div>
				<div class="flex-1 group cursor-help relative">
					<img src="imagenes/pregunta.svg" class="w-16 flex m-auto mt-4">
						<div class="opacity-0 w-28 bg-blue-100 text-grey text-center
						text-xs rounded-lg py-2 absolute z-10 group-hover:opacity-100 bottom-full
						-right-1/1 ml-14 px-3 pointer-events-none lg:-mt-8">
							<i>En el perfil de gestores/as se puede ver la información vinculada a los ciudadanos en los vacunatorios.</i>
						</div>
				</div>
				<button class="modal-open py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="logout"  formnovalidate=""><img src="imagenes/puerta.svg" class="w-16 m-auto"></button>
			</div>
		</nav>
	</div>

	<!-- CONTENIDO !-->
	<div class="flex-1 p-10">
		<div class="border-2 border-blue-400 rounded-xl shadow-lg p-4 ml-10 mr-10">
			<div class="grid grid-cols-2">
				<div class="text-xl text-left">Menu Gestion</div>
				<div class="text-xl text-right"><i class="fa fa-user-circle-o" style="font-size:26px;color:#60A5FA"></i><?php echo ' ' . $apelnom ?></div>
			</div>
		</div>
		<?php
			// SWITCH CON BOTONES
		?>
	</div>
</div>
