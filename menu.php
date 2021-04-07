    <?php

    if ($Id_vacunatorio == 0 and $role=='enf') {
        require 'selector_centro.php';
    } else {
        switch ($role) {
            case 'adm':
                require 'menu_administrativo.php';
                break;
            case 'enf':
                require 'menu_enfermeros.php';
                break;
            case 'ges':
                require 'menu_gestion.php';
                break;
        }
    }
    
    ?>