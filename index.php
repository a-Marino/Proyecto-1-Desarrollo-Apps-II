<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/funciones.js" defer></script>
	<script src="js/abm_usuarios.js" defer></script>
	<script src="js/abm_vacunas.js" defer></script>
	<link rel="icon" href="imagenes/favicon-mobile.png" type="image/png" sizes="16x16">
	<!-- CDN DE TAILWIND !-->
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font/css/font-awesome.min.css">
	<title> Secretaria de Salud - Coronel Suarez</title>
</head>

<body class="bg-gray-100 flex flex-col h-full">
	<!--  Barra NAV !-->
	<nav class="nav">
		<a href=""><img src="imagenes/logo_argentina-blanco.svg" alt="Logo Argentina" class="w-64 ml-24"></a>
		<img src="imagenes/vacunate-logo-lg-n.svg" alt="vacunate" class="h-10 mt-1 mr-24">
	</nav>




	<form action="index.php" method="POST">

		<?php
		error_reporting(0);
		error_reporting(E_ERROR);
		// Conexion a Base de Datos
		$errorConexion = 0;
		require 'conexion.php';
		if ($errorConexion == 1) {
			require 'error_inicio.php';
		} else {
			$mensaje_error = '';
			$boton = $_POST['boton'];
			$botonApp = $_POST['botonApp'];
			$Id_usuario = $_POST['Id_usuario'];
			$usuario = $_POST['usuario'];
			$apelnom = $_POST['apelnom'];
			$role = $_POST['role'];
			$RUP = $_POST['RUP'];

			$Id_vacunatorio = $_POST['Id_vacunatorio'];

			if ($boton == 'envia_clave') {
				$dni = $_POST['dni'];
				$mail = $_POST['mail'];
				$consulta = "SELECT * FROM usuarios where DNI=$dni and mail='$mail'";
				$resultado = $conexion->query($consulta);
				$cuenta = $resultado->rowCount();

				if ($cuenta == 1) {
					$registro = $resultado->fetch();
					$nom_mail = $registro['apelnom'];
					$destino= $registro['mail'];
					$nueva_clave = mt_rand(99999, 999999);
					$clave_recuperacion = md5($nueva_clave);

					$consulta = "UPDATE usuarios SET recuperacion='$clave_recuperacion' WHERE DNI=$dni";
					$resultado = $conexion->query($consulta);
                    // Script envio de mail de recuperacion - config. en conexion.php
					require 'enviar_mail.php';
				} else {
					$boton = 'restablecer';
					$mensaje_error = 'Verifique los Datos de Recuperación Ingresados ';
				}
			}


            // Graba Nueva clave ingresada despues de la solicitud de restablecimiento
			if ($boton == 'graba_clave') {
				$clave1 = $_POST['clave1'];
				$clave2 = $_POST['clave2'];

				if ($clave1 == $clave2 and $clave1 <> '') {
					$consulta = "UPDATE usuarios SET recuperacion='',clave=md5($clave1) WHERE Id=$usuario";
					$resultado = $conexion->query($consulta);
				} else {
					$boton = 'cambia_clave';
					$mensaje_error = 'Las Claves Ingresadas No Coinciden';
				}
			}

            // Selecciona Centro cuando el enfermero tiene mas de uno asignado
			if ($boton == 'sele_centro') {
				$Id_vacunatorio = $_POST['vacunatorio'];
			}

			if ($boton == 'login') {
				$dni = $_POST['dni'];
				$clave = MD5($_POST['clave']);
				$consulta = "SELECT * FROM usuarios where DNI=$dni and clave='$clave' or DNI=$dni and recuperacion='$clave'";
				$resultado = $conexion->query($consulta);
				$cuenta = $resultado->rowCount();
				// Acceso Ok - Carga Variables Usuario
				if ($cuenta == 1) {
					$registro = $resultado->fetch();

					if ($registro['recuperacion'] == $clave) {
						$boton = 'cambia_clave';
						$usuario= $registro['Id'];
					} else {

						$Id_usuario = $registro['Id'];
						$apelnom = $registro['apelnom'];
						$role = $registro['role'];
						$RUP = $registro['RUP'];

						if ($role == 'enf') {
							// Verifica los Centros Asignados si el role es de enfermeria
							$consulta = "SELECT * FROM asignaciones INNER JOIN vacunatorios on asignaciones.Id_vacunatorio=vacunatorios.Id INNER JOIN centros on vacunatorios.Id_centro=centros.Id where Id_usuario=$Id_usuario";
							$resultado = $conexion->query($consulta);
							$cuenta = $resultado->rowCount();
							if ($cuenta == 1) {
								$registro = $resultado->fetch();
								$Id_vacunatorio = $registro['Id_vacunatorio'];
							} else {
								$Id_vacunatorio = 0;
							}
						}
					}
				} else {
					// Verifica Existencia de Usuario
					$consulta = "SELECT * FROM usuarios where DNI=$dni";
					$resultado = $conexion->query($consulta);
					$cuenta = $resultado->rowCount();

					if ($cuenta == 0) {
						$mensaje_error = 'Usuario Inexistente';
						$Id_usuario = 0;
					} else {
						$mensaje_error = 'Password Incorrecto';
					}
				}
			}

			if ($boton == 'logout') {
				$Id_usuario = 0;
			}

			if ($Id_usuario > 0) {
				require 'menu.php';
			} else {
				switch ($boton) {
					case 'restablecer':
						require 'reset.php';
						break;
					case 'cambia_clave':
						require 'cambia_clave.php';
						break;
					default:
						require 'login.php';
						break;
				}
			}
		}
		?>

		<input type="hidden" name="Id_usuario" value="<?php echo $Id_usuario; ?>">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?>">
		<input type="hidden" name="apelnom" value="<?php echo $apelnom; ?>">
		<input type="hidden" name="role" value="<?php echo $role; ?>">
		<input type="hidden" name="RUP" value="<?php echo $RUP; ?>">
		<input type="hidden" name="Id_vacunatorio" id="Id_vacunatorio" value="<?php echo $Id_vacunatorio; ?>">


	</form>

	<footer class="w-full text-center border-t border-grey p-4 pin-b">
		<img  class="w-30 mx-auto" src="imagenes/logo_municipio.svg" alt="logo_municipio">
	</footer>


</body>
