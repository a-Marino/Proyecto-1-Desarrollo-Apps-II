<?php
require('conexion.php');
$consulta = 'SELECT * FROM vacunados where DNI='.$_POST['DNI'];
$resultado = $conexion->query($consulta);
$cuenta = $resultado->rowCount();

// - Login OK. carga var.de session -----------------------------------------
if ($cuenta == 1) {
    $registro = $resultado->fetch(PDO::FETCH_ASSOC);
    echo json_encode($registro,JSON_UNESCAPED_UNICODE);
    exit;
} else {
echo 'error';
exit;
}
?>