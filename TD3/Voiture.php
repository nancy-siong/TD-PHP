<?php

require_once 'Model.php';
   
class Voiture {
   
    private $marque;
    private $couleur;
    private $immatriculation;
   
    // un constructeur
    /*
    public function __construct($m, $c, $i) {
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
    } */

    public function __construct($m = NULL, $c = NULL, $i = NULL) {
        if (!is_null($m) && !is_null($c) && !is_null($i)) {
            $this->marque = $m;
            $this->couleur = $c;
            $this->immatriculation = $i;
        }
    }

    // un getter      
    public function getMarque() {
        return $this->marque;
    }
   
    // un setter 
    public function setMarque($m) {
        $this->marque = $m;
    }

    // un getter      
    public function getCouleur() {
        return $this->couleur;
    }
   
    // un setter 
    public function setCouleur($c) {
        $this->couleur = $c;
    }

    // un getter      
    public function getImmatriculation() {
        return $this->immatriculation;
    }
   
    // un setter 
    public function setImmatricuation($i) {
        $taille = strlen($this->immatriculation);
        if (taille <= 8) {
            $this->immatriculation = $i;
        }
    }
              
    // une methode d'affichage.
    public function afficher() {
        echo "$this->marque ";
        echo "$this->couleur ";
        echo "$this->immatriculation ";
    }

    public static function getAllVoitures() {
    	$pdo = Model::getPDO();

    	$rep = $pdo->query("SELECT * FROM voiture;");

    	$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
        
    	$tab_voit = $rep->fetchAll();

    	return $tab_voit;

    }

    public static function getVoitureByImmat($immat) {

        $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";


        // Préparation de la requête

        $req_prep = Model::getPDO()->prepare($sql);
        $values = array(
            "nom_tag" => $immat,
            //nomdutag => valeur, ...
        );


        // On donne les valeurs et on exécute la requête    

        $req_prep->execute($values);


        // On récupère les résultats comme précédemment

        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
        $tab_voit = $req_prep->fetchAll();


        // Attention, si il n'y a pas de résultats, on renvoie false

        if (empty($tab_voit))
            return false;

        return $tab_voit[0];

    }

    public function save() {
        $pdo = Model::getPDO();

        $rep =  $pdo->prepare("INSERT INTO voiture VALUES (:immatriculation, :marque, :couleur);");

        $values = array(
            "marque" => $this->marque,
            "couleur" => $this->couleur,
            "immatriculation" => $this->immatriculation,
        );

        $rep->execute($values);
    }


}

?>