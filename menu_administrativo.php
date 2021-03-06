<div class="relative min-h-screen flex m-0 p-0">
	<!-- SIDEBAR !-->
	<div class="bg-gray-200 w-56">
		<!-- ROL !-->
		<img src="imagenes/admin.svg" class="w-28 flex m-auto mt-4">
		<!-- NAV !-->
		<nav class="flex flex-col items-center min-h-screen">
			<div class="flex flex-col">
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="asignaciones" formnovalidate><img src="imagenes/asignaciones.svg" class="w-12 m-auto"><span>Asignación <br>de Enfermeros</span></button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="abm-usuario" formnovalidate><img src="imagenes/usuario.svg" class="w-12 m-auto"><span>ABM Usuarios</span></button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="abm-vacunas" formnovalidate><img src="imagenes/vacuna.svg" class="w-12 m-auto"><span>ABM Vacunas</span></button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="abm-vacunatorios" formnovalidate><img src="imagenes/vacunatorio.svg" class="w-12 m-auto"><span>ABM Vacunatorios</span></button>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="abm-centros" formnovalidate><img src="imagenes/centro.svg" class="w-12 m-auto"><span>ABM Centros de vacunacion</span></button>
			</div>
			<div class="mt-auto">
				<div class="flex-1 group cursor-help relative">
					<img src="imagenes/pregunta.svg" class="w-16 flex m-auto mt-4">
						<div class="opacity-0 w-28 bg-blue-100 text-grey text-center
						text-xs rounded-lg py-2 absolute z-10 group-hover:opacity-100 bottom-full
						-right-1/1 ml-14 px-3 pointer-events-none lg:-mt-8">
							<i>En el perfil de administradores se puede asignar enfermeros a vacunatorios, agregar usuarios, vacunas, vacunatorios y centros de vacunacion.</i>
						</div>
				</div>
				<button class="py-2 5 px-4 m-auto mt-4 hover:bg-gray-400" name="boton" value="logout" formnovalidate><img src="imagenes/puerta.svg" class="w-16 m-auto"></button>
			</div>
		</nav>
	</div>

	<!-- CONTENIDO !-->
	<div class="flex-1 p-10">
		<div>
			<?php
			// Botones Menus
				switch ($boton) {
					case 'asignaciones':
						require_once 'asignaciones.php';
						break;
					case 'abm-usuario':
						require_once 'abm-usuario.php';
						break;
					case 'abm-vacunas':
						require_once 'abm-vacunas.php';
						break;
					case 'abm-vacunatorios':
						require_once 'abm-vacunatorios.php';
						break;
					case 'abm-centros':
						require_once 'abm-centros.php';
						break;
				}
			// Botones Funcionalidades
				switch ($botonApp) {
					case 'graba_usuario':
						$dniUsu=$_POST['dni'];
						$nomApell= htmlentities(addslashes($_POST['nomApell']));
						$telefonoUsu=$_POST['telefono'];
						$emailUsu=$_POST['email'];
						$roleUsu=$_POST['rol'];
						$rupUsu=$_POST['rup'];
						$claveUsu=md5($_POST['clave']);

						$sql= "INSERT INTO usuarios(DNI,apelnom,mail,role,clave)VALUES($dniUsu,'$nomApell','$emailUsu','$roleUsu','$claveUsu')";
						$resultado = $conexion->query($sql);
						$ultimoid = $conexion->lastInsertId();

						if ($roleUsu === 'enf') {
							$sql2 = "INSERT INTO enfermeros VALUES ($ultimoid,$rupUsu,$telefonoUsu)";
							$resultado2 = $conexion->query($sql2);
						}

						require_once 'abm-usuario.php';

						break;
					case 'graba_vacuna':
						$nombreVac = $_POST['nom_vacuna'];
						$dosisVac = $_POST['cant_dosis'];

						$sql ="INSERT INTO tipo_vacunas(nom,dosis)VALUE('$nombreVac',$dosisVac)";
						$resultado = $conexion->query($sql);

						require_once 'abm-vacunas.php';

						break;
					case 'graba_vacunatorio':
						$centro= $_POST['centro'];
						$medico= $_POST['medico'];
						$horario= $_POST['horario'];
						$telefonoVac= $_POST['telefono'];

						$sql ="INSERT INTO vacunatorios(id_centro,medico,horario,telefono)VALUE($centro,'$medico','$horario',$telefonoVac)";
						$resultado = $conexion->query($sql);

						require_once 'abm-vacunatorios.php';

						break;
				}
			?>
		</div>
	</div>
</div>
