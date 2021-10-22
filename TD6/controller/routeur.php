<?php


//require_once '../lib/File.php'; //déplacé dans index
//require_once File::build_path('lib','File.php');


require_once File::build_path(array('controller','ControllerVoiture.php'));


$action = "readAll";

// On recupère l'action passée dans l'URL
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

$ControllerVoiture_fcts = get_class_methods('ControllerVoiture');
if (in_array($action, $ControllerVoiture_fcts)) {
    // Appel de la méthode statifr/~siongn/PHP/TD-PHP/TD6/index.php?action=delete&immat=555BB66que $action de ControllerVoiture
    ControllerVoiture::$action();
}
else {
    require File::build_path(array('view', 'voiture', 'error.php'));
}


?>
