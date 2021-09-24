<?php

    require_once 'Utilisateur.php';
    require_once 'Trajet.php';

    $tab_trajets = Trajet::getAllTrajets();
    $tab_user = Utilisateur::getAllUtilisateurs();


    foreach ($tab_trajets as $value)
        $value->afficher();

    echo "<br>";

    foreach ($tab_user as $value)
        $value->afficher();

?>

