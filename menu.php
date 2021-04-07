    <?php

    if ($Id_vacunatorio == 0 and $role=='enf') {
        require 'selector_centro.php';
    } else {
        switch ($role) {
            case 'adm':
                echo 'Menu Administrativo';
                break;
            case 'enf':
                require 'menu_enfermeros.php';
                break;
            case 'ges':
                echo 'Menu Gestión <br>';
                break;
        }
    }
    
    ?>