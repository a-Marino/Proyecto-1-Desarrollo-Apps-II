<?php
require('../conexion.php');

    $tabla ="";
    $query = "SELECT * FROM usuarios";

    if(isset($_POST['consulta'])){
       $buscado= $_POST['consulta'];
       $query = "SELECT DNI,apelnom,mail,role,disable  FROM usuarios
        WHERE DNI LIKE '$buscado%' OR apelnom LIKE '$buscado%' OR mail LIKE '$buscado%' OR role LIKE '$buscado%'";
      
    }

    $resultado =  $conexion->query($query);

    if($resultado->rowCount() > 0){
        $tabla .= "<table class='shadow-lg bg-white table-fixed'>
                        <th >
                            <tr>
                                <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'>DNI</td>
                                <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'>Nombre y Apellido</td>
                                <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'>Mail</td>
                                <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'>Role</td>
                                <td class='bg-blue-100 border text-left w-1/2 px-8 py-2'>Estado</td>
                            </tr>
                        </th>
                        <tbody>";
        foreach ($conexion->query($query) as $fila) {
            $tabla .= " <tr>
                            <td  class='text-center'>".$fila['DNI']."</td>
                            <td class='text-center'>".$fila['apelnom']."</td>
                            <td class='text-center'>".$fila['mail']."</td>
                            <td class='text-center '>".$fila['role']."</td>
                            <td class='text-center '>".($fila['disable'] == 0 ? 'Habilitado' : 'Deshabilitado')."</td>
                            </tr>";
        }
        $tabla .= "</tbody></table>";
    }else{
        $tabla .= "No hay datos";
    }

    echo $tabla;


?>