<?php

//require_once 'Model.php';
require_once File::build_path('model','Model.php');

class Trajet {

	
	private $id;
	private $depart;
	private $arrivee;
	private $nbplaces;
	private $prix;
	private $conducteur_login;


    public function __construct($data = NULL) {

        if (!is_null($data)) {
        $this->id=$data['id'];
            $this->depart=$data['depart'];
            $this->arrivee=$data['arrivee'];
            $this->date=$data['date'];
            $this->nbplaces=$data['nbplaces'];
            $this->prix=$data['prix'];
            $this->conducteur_login=$data['conducteur_login'];
        }

    }

    public function afficher() {
        echo "id : $this->id, depart : $this->depart, arrivee : $this->arrivee, nbplaces : $this->nbplaces, prix : $this->prix, login conducteur : $this->conducteur_login<br>";
    }


    public static function getAllTrajets() {
        $pdo = Model::getPdo();

        $rep = $pdo->query("SELECT * FROM trajet;");

        $rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');

        $tab_trajets = $rep->fetchAll();

        return $tab_trajets;
    }


    public static function findPassager($id) {
    	try {
            $req_prep = Model::getPDO()->prepare("SELECT login, nom, prenom FROM utilisateurs u JOIN passager p ON u.login = p.utilisateur_login WHERE trajet_id = :id_trajet;");
        
            $values = array('id_trajet' => $id);

            $req_prep->execute($values);
            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
            $tab_u = $req_prep->fetchAll();

            return $tab_u;
    	}

    	catch (PDOException $e) {
        	if (Conf::getDebug())
            	echo $e->getMessage();
        	else
            	echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
        	die();
    	}
	}
}

?>





