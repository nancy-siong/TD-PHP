<?php

require_once 'Voiture.php';

if (!empty($_POST)) {
    echo $_POST['immatriculation']. "<br>";
    echo $_POST['marque'] . "<br>";
    echo $_POST['couleur'];
}

$voiture = new Voiture($_POST['marque'], $_POST['couleur'], $_POST['immatriculation']);

$voiture->save();



?>