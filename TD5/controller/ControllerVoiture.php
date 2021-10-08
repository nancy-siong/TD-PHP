<?php
//require_once('../model/ModelVoiture.php'); // chargement du modèle
require_once File::build_path(array('model','ModelVoiture.php'));

class ControllerVoiture
{
    public static function readAll()
    {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        //require('../view/voiture/list.php');  //"redirige" vers la vue
        require File::build_path(array('view','voiture','list.php'));
    }

    public static function read()
    {
        $v = ModelVoiture::getVoitureByImmat($_GET['immat']);
        if ($v == false) {
            //require('../view/voiture/error.php'); 
            require File::build_path(array('view','voiture','error.php'));
        }
        //else require('../view/voiture/detail.php');  //"redirige" vers la vue
        else require File::build_path(array('view','voiture','detail.php'));
    }

    public static function create() {
        //require('../view/voiture/create.php');
        require File::build_path(array('view','voiture','create.php'));
    }

    public static function created() {
        $mv = new ModelVoiture($_GET['marque'], $_GET['couleur'], $_GET['immat']);
        $mv->save();
        ControllerVoiture::readAll();
    }
}
