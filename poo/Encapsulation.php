<!-- 1. Encapsulation
Définition
L'encapsulation est un principe de la POO qui consiste à regrouper les données (propriétés)
et les comportements (méthodes) dans une même classe, tout en contrôlant l'accès à ces
données. 
Cela permet de protéger les données 
en les rendant accessibles uniquement via des méthodes spécifiques (les getters et setters). -->


<!-- Niveaux de visibilité
public : Accessible de partout (dans et hors de la classe).
private : Accessible uniquement dans la classe où la propriété ou méthode est définie.
protected : Accessible dans la classe et ses classes dérivées. -->


<!-- Avantages de l'encapsulation
Protection des données : Évite les modifications non contrôlées des propriétés.
Modularité : Permet de modifier l'implémentation interne sans impacter le code qui utilise la classe.
Facilité de maintenance : Centralise la logique d'accès et de modification des données. -->

<?php
class CompteBancaire {
    private $numeroCompte;
    private $solde;

    public function __construct($numeroCompte, $soldeInitial) {
        $this->numeroCompte = $numeroCompte;
        $this->solde = $soldeInitial;
    }

    // Getter pour accéder au solde
    public function getSolde() {
        return $this->solde;
    }

    // Méthode pour déposer de l'argent
    public function deposer($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }

    // Méthode pour retirer de l'argent
    public function retirer($montant) {
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
        }
    }
}

// Utilisation
$compte = new CompteBancaire("12345ABC", 500);
echo "Solde initial : " . $compte->getSolde() . "€\n";

$compte->deposer(200);
echo "Après dépôt : " . $compte->getSolde() . "€\n";

$compte->retirer(100);
echo "Après retrait : " . $compte->getSolde() . "€\n";
?>

<!-- 
Points clés dans cet exemple
Les propriétés numeroCompte et solde sont private, donc elles ne peuvent pas être modifiées directement.
Les méthodes publiques deposer et retirer assurent que les modifications sont contrôlées. -->


