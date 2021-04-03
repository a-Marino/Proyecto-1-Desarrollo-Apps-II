    <?php

    if ($Id_vacunatorio == 0 and $role=='enf') {
        require 'selector_centro.php';
    } else {
        echo '<div class="centrado">';
        switch ($role) {
            case 'adm':
                echo 'Menu Administrativo';
                break;
            case 'enf':
                echo 'Menu Enfermero <br>';
                echo 'Vacunatorio N°' . $Id_vacunatorio . '<br>';
                break;
            case 'ges':
                echo 'Menu Gestión <br>';
                break;
        }
        echo '</div>';
    ?>
        <div class="centrado">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold mt-10 py-2 px-4 rounded-full" name="boton" value="logout">Salir</button>
        </div>
    <?php
    }
    ?>