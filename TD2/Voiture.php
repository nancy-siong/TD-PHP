<?php

require_once 'Model.php';
   
class Voiture {
   
    private $marque;
    private $couleur;
    private $immatriculation;
   
    // un constructeur
    public function __construct($m, $c, $i) {
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
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
        echo "$this->marque";
        echo "$this->couleur";
        echo "$this->immatriculation";
    }

    public static function getAllVoitures() {
    	$pdo = Model::getPDO();

    	$rep = $pdo->query("SELECT * FROM Voiture;");

    	$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
        
    	$tab_voit = $rep->fetchAll();

    	return $tab_voit;

}
}
?>