<?php
   
class Utilisateur {

	private $login;
	private $nom;
	private $prenom;


	public function __construct($data = NULL) {
        if (!is_null($data)) {
            $this->login = $data['login'];
            $this->nom = $data['nom'];
            $this->prenom = $data['prenom'];
        }
    }

    public function afficher() {
        echo "login = $this->login, nom = $this->nom, prenom = $this->prenom" . "<br>";
    }

	
	public static function getAllUtilisateurs() {
        $pdo = Model::getPDO();

        $rep = $pdo->query("SELECT * FROM utilisateur");

        $rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');

        $tab_users = $rep->fetchAll();

        return $tab_users;
    }
}


?>