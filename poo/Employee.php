<?php

// Employee herite de Personne:

require_once 'Personne.php';

class Employee extends Personne{
    protected $poste;


    public function __construct( $nom, $prenom,$email,$poste){
        parent::__construct($nom, $prenom,$email);
        $this->poste = $poste;
    }

    public function afficherInformations(){
        echo "Nom : $this->nom <br>";
        echo "Prenom : $this->prenom <br>";
        echo "Email : $this->email <br>";
        echo "Poste : $this->poste <br>";

    }


}