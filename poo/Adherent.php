<?php

require_once 'Personne.php';


class Adherent extends Personne{
    protected $numCarte;

    public function __construct($nom, $prenom, $email,$numCarte){
        parent::__construct($nom, $prenom, $email);
        $this->numCarte = $numCarte;
    }

    public function afficherInformations(){
        echo "Nom : $this->nom <br>";
        echo "Prenom : $this->prenom <br>";
        echo "Email : $this->email <br>";
        echo "Numero de Carte : $this->numCarte <br>";

    }

}