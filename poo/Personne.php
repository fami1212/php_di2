<?php 

class Personne{
    public $nom;
    public $prenom;
    protected $email;

    public function __construct($nom, $prenom, $email){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }


    public function afficherInformations(){
        echo "Nom : $this->nom <br>";
        echo "Prenom : $this->prenom <br>";
        echo "Email : $this->email <br>";

    }



}