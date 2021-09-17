<?php
   
class Trajet {
   
    private $id;
    private $depart;
    private $arrivee;
    private $nbplaces;
    private $prix;
    private $conducteur_login;

    public function get($nom_attribut) {
        return $this->$nom_attribut;
    }

    public function set($nom_attribut, $valeur) {
        return $this.$nom_attribut = $valeur;
    }

    public function __construct($data) {
        $this->id = $data['id'];
        $this->depart = $data['depart'];
        $this->arrivee = $data['arrivee'];
        $this->nbplaces = $data['nbplaces'];
        $this->prix = $data['prix'];
        $this->conducteur_login = $data['conducteur_login'];
    }
}   

?>
   