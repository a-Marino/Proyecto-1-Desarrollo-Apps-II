<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$baseDeDatos = "vacunacion";

try {
    // Crea la conexion con el servidor
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $password);
    $conexion->exec("set names utf8");
} catch (PDOException $excepcion) {
    // echo 'Falló la conexión: ' . $excepcion->getMessage();
    $errorConexion=1;
}
