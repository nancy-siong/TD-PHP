<?php

//require_once 'Trajet.php';
require_once File::build_path(array('Trajet.php'));

$tab_u = Trajet::findPassager(3);
foreach ($tab_u as $value) {
    $value->afficher();
    echo "<br>";
}

?>