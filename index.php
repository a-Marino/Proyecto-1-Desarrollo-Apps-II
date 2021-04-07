<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="imagenes/favicon-mobile.png" type="image/png" sizes="16x16">
	<!-- CDN DE TAILWIND !-->
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<title> Secretaria de Salud - Coronel Suarez</title>
</head>

<body class="bg-gray-100">
	<!--  Barra NAV !-->
	<nav class="nav">
		<a href=""><img src="imagenes/logo_argentina-blanco.svg" alt="Logo Argentina" class="w-64 ml-24"></a>
		<img src="imagenes/vacunate-logo-lg-n.png" alt="vacunate" class="h-10 mt-1 mr-24">
	</nav>

	<form action="index.php" method="POST">

		<?php
		error_reporting(0);
		error_reporting(E_ERROR);
		require 'conexion.php';
		$mensaje_error = '';
		$boton = $_POST['boton'];
		$usuario = $_POST['usuario'];
		$apelnom = $_POST['apelnom'];
		$role = $_POST['role'];
		$Id_vacunatorio = $_POST['Id_vacunatorio'];

		if ($boton == 'sele_centro') {
			$Id_vacunatorio = $_POST['vacunatorio'];
		}

		if ($boton == 'login') {
			$dni = $_POST['dni'];
			$clave = MD5($_POST['clave']);
			$consulta = "SELECT * FROM usuarios where DNI=$dni and clave='$clave'";
			$resultado = $conexion->query($consulta);
			$cuenta = $resultado->rowCount();
			$mensaje_error = 'Password Incorrecto';
			$usuario = 0;

			if ($cuenta == 1) {
				// Acceso Ok - Carga Variables Usuario
				$usuario = $dni;
				$registro = $resultado->fetch();
				$apelnom = $registro['apelnom'];
				$role = $registro['role'];
				if ($role == 'enf') {
					// Verifica los Centros Asignados si el role es de enfermeria
					$consulta = "SELECT * FROM asignaciones INNER JOIN vacunatorios on asignaciones.Id_vacunatorio=vacunatorios.Id INNER JOIN centros on vacunatorios.Id_centro=centros.Id where DNI=$dni";
					$resultado = $conexion->query($consulta);
					$cuenta = $resultado->rowCount();
					if ($cuenta == 1) {
						$registro = $resultado->fetch();
						$Id_vacunatorio = $registro['Id_vacunatorio'];
					} else {
						$Id_vacunatorio = 0;
					}
				}
			} else {
				// Verifica Existencia de Usuario
				$consulta = "SELECT * FROM usuarios where DNI=$dni";
				$resultado = $conexion->query($consulta);
				$cuenta = $resultado->rowCount();

				if ($cuenta == 0) {
					$mensaje_error = 'Usuario Inexistente';
					$usuario = 0;
				}
			}
		}

		if ($boton == 'logout') {
			$usuario = 0;
		}

		if ($usuario > 0) {
			require 'menu.php';
		} else {
			require 'login.php';
		}
		?>

		<input type="hidden" name="usuario" value="<?php echo $usuario; ?>">
		<input type="hidden" name="apelnom" value="<?php echo $apelnom; ?>">
		<input type="hidden" name="role" value="<?php echo $role; ?>">
		<input type="hidden" name="Id_vacunatorio" value="<?php echo $Id_vacunatorio; ?>">

	</form>
</body>