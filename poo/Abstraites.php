<!-- Une classe abstraite sert de modèle pour d'autres classes.
 Elle peut contenir des méthodes abstraites (sans implémentation) 
 que les classes dérivées doivent définir. -->


 <?php
abstract class Vehicule {
    protected $marque;

    public function __construct($marque) {
        $this->marque = $marque;
    }

    // Méthode abstraite
    abstract public function demarrer();
}

class Voiture extends Vehicule {
    public function demarrer() {
        return "La voiture $this->marque démarre.";
    }
}

class Moto extends Vehicule {
    public function demarrer() {
        return "La moto $this->marque démarre.";
    }
}

// Utilisation
$voiture = new Voiture("Toyota");
echo $voiture->demarrer() . "\n";

$moto = new Moto("Yamaha");
echo $moto->demarrer() . "\n";
?>

