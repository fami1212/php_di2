<?php 


class Animal
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function manger()
    {
        echo $this->nom . " est en train de manger.\n";
    }
}