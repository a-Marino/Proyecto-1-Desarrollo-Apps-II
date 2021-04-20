    <?php

    if ($Id_vacunatorio == 0 and $role=='enf') {
        require 'selector_centro.php';
    } else {
        switch ($role) {
            case 'adm':
                require_once 'menu_administrativo.php';
                break;
            case 'enf':
                require_once 'menu_enfermeros.php';
                break;
            case 'ges':
                require_once 'menu_gestion.php';
                break;
        }
    }
    
    ?>