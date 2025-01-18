<?php
require_once 'vehicule.php';

/**
 * Classe fille Car (Voiture), qui hérite de Vehicule
 */
class Car extends Vehicule
{
    private $nbDoors;

    
    public function __construct($brand, $model, $color, $nbDoors)
    {
        parent::__construct($brand, $model, $color);

        $this->nbDoors = $nbDoors;
    }

 
    public function startEngine()
    {
        echo "La voiture {$this->getBrand()} {$this->getModel()} démarre avec une clé.<br>";
    }

    public function getNbDoors()
    {
        return $this->nbDoors;
    }
}
