<?php
    include '../model/film.php';
    $Film1 = new Film;
    $Film1->afficherTilte();
    $Film1->afficherYear();
    echo $Film1->afficherTime();
?>