<?php
class Trajet {
	
	private $id;
	private $depart;
	private $arrivee;
	private $nbplaces;
	private $prix;
	private $conducteur_login;

	}

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

}

?>





