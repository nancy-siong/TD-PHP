<?php


//require_once '../lib/File.php'; //déplacé dans index
//require_once File::build_path('lib','File.php');


require_once File::build_path(array('controller','ControllerVoiture.php'));


$action = "readAll";

// On recupère l'action passée dans l'URL
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}


// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action();

?>
