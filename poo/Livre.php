<?php

// Créez une classe Livre avec les propriétés :
// titre (string)
// auteur (string)
// disponible (bool)
class Livre
{
    public $titre;
    public $auteur;
    public  $disponible;

    // Ajoutez un constructeur pour initialiser ces propriétés.
    public function __construct(string $titre, string $auteur, bool $disponible = true)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->disponible = $disponible;
    }


    public function afficherDetails(){
        echo "Titre : $this->titre \n";
        echo "Auteur : $this->auteur \n";

        if($this->disponible = true)
        echo "Disponible";

        else echo "Nom Disponible ";

    }


    public function changerDisponibilite(){
        $this->disponible = !$this->disponible;
        if($this->disponible = true)
        echo "Disponible : $this->disponible \n";

        else echo "Nom Disponible ";
    }

}