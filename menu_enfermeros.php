<div class="relative min-h-screen flex m-0 p-0">
	<!-- SIDEBAR !-->
	<div class="bg-gray-200 w-56">
		<!-- ROL !-->
		<img src="imagenes/enfermeros.svg" alt="enfermero" class="w-28 flex m-auto mt-4">
		<!-- NAV !-->
		<nav class="flex flex-col items-center min-h-screen">
			<div class="flex flex-col">
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="registrar-vacunado" formnovalidate><img src="imagenes/vacuna.svg" class="w-12 m-auto"><span>Registrar Vacunado</span></button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" formnovalidate>Boton 2</button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" formnovalidate>Boton 3</button>
			</div>
			<div class="mt-10">
				<div class="flex-1 group cursor-help relative">
					<img src="imagenes/pregunta.svg" class="w-16 flex m-auto mt-4">
					<div class="opacity-0 w-28 bg-blue-100 text-grey text-center
						text-xs rounded-lg py-2 absolute z-10 group-hover:opacity-100 bottom-full
						-right-1/1 ml-14 px-3 pointer-events-none lg:-mt-8">
						<i>En el perfil de enfermeros/as se pueden registrar vacunados, y ver informacion sobre los vacunatorios.</i>
					</div>
				</div>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="logout" formnovalidate><img src="imagenes/puerta.svg" class="w-16 m-auto"></button>
			</div>
		</nav>
	</div>

	<!-- CONTENIDO !-->
	<div class="flex-1 mt-5">

		<?php
		switch ($boton) {
			case 'graba_vacunado':
				$grupo_riesgo=$_POST['grupo_riesgo'];
				$DNI = $_POST['DNI'];
	            $edad = $_POST['edad'];
				$tipo_vacuna = $_POST['tipo_vacuna'];
				$nom = htmlentities(addslashes($_POST['apelnom_v']));
				$dir = htmlentities(addslashes($_POST['domicilio']));
				$hoy=date('Y-m-d');

				if($_POST['turno']==1){
				    $consulta = "INSERT INTO vacunados (apelnom,domicilio,fecha_dosis1,DNI,edad,grupo_riesgo,tipo_vacuna,Id_vacunatorio,RUP1) VALUES ('$nom','$dir','$hoy',$DNI,$edad,$grupo_riesgo,$tipo_vacuna,$Id_vacunatorio,$RUP)";
				}else{
					$consulta = "UPDATE vacunados SET fecha_dosis2='$hoy',RUP2=$RUP WHERE DNI=$DNI";
				}

				$resultado = $conexion->query($consulta);
			    $mgraba=1;
				
				require_once 'registro-vacunados.php';
				break;
			case 'registrar-vacunado':
				require_once 'registro-vacunados.php';
				break;
		}
		?>
	</div>
</div>
