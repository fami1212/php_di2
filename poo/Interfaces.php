<?php


// Les interfaces définissent un contrat que les classes doivent respecter. 
// Chaque classe implémentant une interface doit définir toutes ses méthodes.


interface Forme {
    public function calculerSurface();
    public function calculerPerimetre();
}

class Rectangle implements Forme {
    private $largeur;
    private $longueur;

    public function __construct($largeur, $longueur) {
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }


    public function calculerSurface() {
        return $this->largeur * $this->longueur;
    }

    public function calculerPerimetre(){
        return 2 * ($this->largeur + $this->longueur);
    }
}

class Cercle implements Forme {
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function calculerSurface() {
        return pi() * pow($this->rayon, 2);
    }
}

// Utilisation
$rectangle = new Rectangle(10, 5);
echo "Surface du rectangle : " . $rectangle->calculerSurface() . "\n";

$cercle = new Cercle(7);
echo "Surface du cercle : " . $cercle->calculerSurface() . "\n";
?>
