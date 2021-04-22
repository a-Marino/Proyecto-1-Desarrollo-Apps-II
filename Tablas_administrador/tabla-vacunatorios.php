<?php
require('../conexion.php');

$tabla ="";
$query = "SELECT * FROM vacunatorios INNER JOIN centros ON vacunatorios.Id_centro = centros.Id ";

if(isset($_POST['consulta'])){
   $buscado= $_POST['consulta'];
   $query = "SELECT nom ,medico,horario,telefono,vacunatorios.disable FROM vacunatorios INNER JOIN centros ON vacunatorios.Id_centro = centros.Id 
   WHERE nom LIKE '$buscado%'OR medico LIKE '$buscado%' OR telefono LIKE '$buscado%'";
}

$resultado =  $conexion->query($query);

if($resultado->rowCount() > 0){
    $tabla .= "<table class='shadow-lg bg-white table-fixed'>
                    <th >
                        <tr>
                            <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'>Centro</td>
                            <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'>Medico</td>
                            <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'>Horario</td>
                            <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'>Teléfono</td>
                            <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'>Estado</td>
                            <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'></td>
                            <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'></td>
                        </tr>
                    </th>
                <tbody>";
    foreach ($conexion->query($query) as $fila) {
        $tabla .= " <tr>
                        <td  class='text-center border border-gray-300 p-1'>".$fila['nom']."</td>
                        <td class='text-center border border-gray-300 p-1'>".$fila['medico']."</td>
                        <td class='text-center border border-gray-300 p-1'>".$fila['horario']."</td>
                        <td class='text-center border border-gray-300 p-1'>".$fila['telefono']."</td>
                        <td class='text-center border border-gray-300 p-1'>".($fila['disable'] == 0 ? 'Habilitado' : 'Deshabilitado')."</td>
                        <td class='text-center p-2'><button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full'>Editar</button></td>
                        <td class='text-center p-2'><button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full 'formnovalidate'>Deshabilitar</button></td>
                    </tr>";
    }
    $tabla .= "</tbody></table>";
}else{
    $tabla .= "No hay datos";
}

echo $tabla;


?>