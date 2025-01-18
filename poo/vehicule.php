<?php


class Vehicule
{
    private $brand;
    protected $model;
    public $color;
    
    public function __construct($brand, $model, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

   
    public function getBrand()
    {
        return $this->brand;
    }


    public function getModel()
    {
        return $this->model;
    }

   
    public function startEngine()
    {
        echo "Le moteur du véhicule {$this->brand} {$this->model} est démarré !<br>";
    }

    
    public function stopEngine()
    {
        echo "Le moteur du véhicule {$this->brand} {$this->model} est arrêté.<br>";
    }
}
