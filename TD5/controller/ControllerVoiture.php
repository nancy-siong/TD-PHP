<?php
//require_once('../model/ModelVoiture.php'); // chargement du modèle
require_once File::build_path(array('model','ModelVoiture.php'));

class ControllerVoiture {

    public static function readAll()
    {
        $controller='voiture';
        $view='list';
        $pagetitle='Liste des voitures';

        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        //require('../view/voiture/list.php');  //"redirige" vers la vue
        require File::build_path(array('view','view.php'));
                                                //voiture','list.php
    }


    public static function read()
    {
        $controller='voiture';
        $view='detail';
        $pagetitle='Informations';

        $v = ModelVoiture::getVoitureByImmat($_GET['immat']);
        if ($v == false) {
                                        //('view','voiture','error.php'));
            require File::build_path(array('view','view.php'));
        }
                                            //('view','voiture','detail.php'));
        else require File::build_path(array('view','view.php'));
    }


    public static function create() {
        $controller='voiture';
        $view='create';
        $pagetitle='Creer';

                                    //'view','voiture','create.php'));
        require File::build_path(array('view','view.php'));
    }


    public static function created() {
        $controller='voiture';
        $view='created';
        $pagetitle='Voiture créée';

        $tab_v = ModelVoiture::getAllVoitures(); 
        $mv = new ModelVoiture($_GET['marque'], $_GET['couleur'], $_GET['immat']);
        $mv->save();
        require File::build_path(array('view','view.php'));
        //ControllerVoiture::readAll();
    }
}
