<?php

// 1. Qu’est-ce que la Programmation Orientée Objet (POO) ?
// La POO est un paradigme de programmation qui organise le code autour de classes et d’objets plutôt qu’autour de fonctions procédurales ou de scripts linéaires. Elle offre plusieurs avantages :

// Modularité : votre code est structuré en entités (classes) représentant des objets du monde réel ou des concepts abstraits.
// Réutilisabilité : grâce à l’héritage, un objet peut hériter des propriétés et méthodes d’un autre objet.
// Maintenance facilitée : le code est plus facile à maintenir et à faire évoluer.
// 2. Notions de base en POO en PHP
// 2.1. Classe et objet
// Une classe est un plan (ou modèle) décrivant ce que sera l’objet.
// Un objet est une instance concrète de cette classe.





class Voiture
{
    // Propriétés (attributs)
    public $marque;
    public $modele;

    // Méthode (fonction) pour démarrer la voiture
    public function demarrer()
    {
        echo "La voiture démarre.\n";
    }
}

// Instanciation = création d’un objet de la classe
$maVoiture = new Voiture();
$maVoiture->marque = "Renault";
$maVoiture->modele = "Clio";

// Appel d’une méthode sur l’objet
$maVoiture->demarrer();  // Affichera : "La voiture démarre."


// 2.2. Visibilité : public, protected, private
// En PHP, on peut préciser la visibilité d’une propriété ou d’une méthode :

// public : accessible de partout (à l’intérieur et à l’extérieur de la classe).
// protected : accessible dans la classe qui la définit ET dans ses classes filles (héritage), mais pas à l’extérieur.
// private : accessible seulement au sein de la classe qui la définit.


class CompteBancaire
{
    private $solde;  // On le met en privé pour ne pas y accéder directement de l’extérieur
    public $titulaire;

    // Constructeur
    public function __construct($titulaire, $soldeInitial = 0)
    {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitial;
    }

    public function deposer($montant)
    {
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }

    public function retirer($montant)
    {
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
        }
    }

    public function getSolde()
    {
        return $this->solde;
    }
}

// Utilisation
$compteMareme = new CompteBancaire("Dupont", 100);
$compteMareme->deposer(50);
$compte->retirer(20);
echo "Solde : " . $compteMareme->getSolde();  // Solde : 130


// 2.3. Constructeur (__construct)
// Le constructeur est une méthode spéciale appelée automatiquement lors de l’instanciation d’une classe. Elle porte le nom __construct en PHP.

// Dans l’exemple précédent, la méthode :

public function __construct($titulaire, $soldeInitial = 0)
{
    $this->titulaire = $titulaire;
    $this->solde = $soldeInitial;
}
// est le constructeur qui initialise les attributs de l’objet.

// 3. L’héritage en PHP
// L’héritage permet de créer une nouvelle classe (dite classe fille ou sous-classe) qui hérite des attributs et méthodes d’une classe existante (dite classe parente ou super-classe).

// Syntaxe :
class ClasseFille extends ClasseMere
{
    // ...
}


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

class Chien extends Animal
{
    protected $age;

    // Constructeur optionnel si on veut personnaliser
    public function __construct($nom,$age)
    {
        // Appel du constructeur parent
        parent::__construct($nom);
        $this->age = $age;
    }

    public function aboyer()
    {
        echo $this->nom . " aboie : Wouf !\n";
    }
}



// Instanciation
$medor = new Chien("Médor", 2);
$medor->manger();    // "Médor est en train de manger."
$medor->aboyer();    // "Médor aboie : Wouf !"

// La classe Chien hérite de la classe Animal.
// Elle a donc accès aux propriétés/méthodes protected ou public de la classe mère.

// 3.1. Redéfinition (override) de méthodes
// Une classe fille peut redéfinir une méthode héritée pour en changer le comportement.
class Animal
{
    public function seDeplacer()
    {
        echo "Je me déplace.\n";
    }
}

class Chien extends Animal{
    
}

$coco= new Chien();
$coco->seDeplacer(); 

class Oiseau extends Animal
{
    // On redéfinit la méthode seDeplacer
    public function seDeplacer()
    {
        echo "Je vole dans les airs !\n";
    }
}


