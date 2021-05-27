<?php

if(!empty($_GET)):

    switch ($_GET['action']):
        case 'filmList' : 
            require_once('view/acteurAdd.php');
            break;

        case 'actorList' : 
            require_once('view/film.php');
            break;

        default :
            echo "La page que vous avez demandé n'existe pas";
            include 'view/menuBase.php';
            break;
    endswitch;

else :

    include 'view/menuBase.php';

endif;

?>
