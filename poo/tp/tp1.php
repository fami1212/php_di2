<?php

// Étape 1 : Interface pour les paiements
interface PaiementInterface {
    public function effectuerPaiement();
}

// Étape 2 : Classe abstraite pour factoriser les fonctionnalités communes
abstract class Paiement implements PaiementInterface {
    protected $montant;
    protected $devise;

    public function __construct($montant, $devise = 'EUR') {
        $this->montant = $montant;
        $this->devise = $devise;
    }

    // Méthode commune pour afficher le montant
    public function afficherMontant() {
        return $this->montant . " " . $this->devise;
    }
}

// Étape 3 : Classes concrètes pour les différents modes de paiement

// Paiement par carte bancaire
class PaiementCarteBancaire extends Paiement {
    private $numeroCarte;
    private $nomTitulaire;

    public function __construct($montant, $devise, $numeroCarte, $nomTitulaire) {
        parent::__construct($montant, $devise);
        $this->numeroCarte = $numeroCarte;
        $this->nomTitulaire = $nomTitulaire;
    }

    public function effectuerPaiement() {
        return "Paiement de " . $this->afficherMontant() . " effectué par Carte Bancaire (Titulaire : $this->nomTitulaire).";
    }
}

// Paiement via PayPal
class PaiementPayPal extends Paiement {
    private $email;

    public function __construct($montant, $devise, $email) {
        parent::__construct($montant, $devise);
        $this->email = $email;
    }

    public function effectuerPaiement() {
        return "Paiement de " . $this->afficherMontant() . " effectué via PayPal (Email : $this->email).";
    }
}

// Paiement par virement bancaire
class PaiementVirementBancaire extends Paiement {
    private $iban;

    public function __construct($montant, $devise, $iban) {
        parent::__construct($montant, $devise);
        $this->iban = $iban;
    }

    public function effectuerPaiement() {
        return "Paiement de " . $this->afficherMontant() . " effectué par Virement Bancaire (IBAN : $this->iban).";
    }
}

// Étape 4 : Méthode polymorphe pour gérer différents types de paiements
function traiterPaiement(PaiementInterface $paiement) {
    echo $paiement->effectuerPaiement() . "\n";
}

// Étape 5 : Tester le système

// Paiement par carte bancaire
$paiementCarte = new PaiementCarteBancaire(100, "EUR", "1234-5678-9876-5432", "Jean Dupont");
traiterPaiement($paiementCarte);

// Paiement via PayPal
$paiementPayPal = new PaiementPayPal(50, "USD", "jean.dupont@example.com");
traiterPaiement($paiementPayPal);

// Paiement par virement bancaire
$paiementVirement = new PaiementVirementBancaire(200, "EUR", "FR76 1234 5678 9876 5432 1098");
traiterPaiement($paiementVirement);

?>
