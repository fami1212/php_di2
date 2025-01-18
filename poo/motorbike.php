<?php
require_once 'vehicule.php';


class Motorbike extends Vehicule
{
    protected $engineType;

    public function __construct($brand, $model, $color, $engineType)
    {
        parent::__construct($brand, $model, $color);

        $this->engineType = $engineType;
    }


    public function startEngine()
    {
        echo "La moto {$this->getBrand()} {$this->getModel()} démarre avec un bouton.<br>";
    }


    public function getEngineType()
    {
        return $this->engineType;
    }
}
