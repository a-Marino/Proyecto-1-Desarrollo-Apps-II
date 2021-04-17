<?php

// Configuracion de Cuenta de Mail
$mail_host = 'smtp.gmail.com';
$mail_port = '587';
$mail_user = 'upsoprograma1@gmail.com';
$mail_pass = 'Algoritmo01';


// Conexion a Base de Datos
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
