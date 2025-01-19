<!-- 2. Polymorphisme
Définition
Le polymorphisme est la capacité d'une méthode ou d'une classe à se
 comporter différemment selon le contexte. Cela permet de créer du code générique et extensible.

En PHP, le polymorphisme se manifeste principalement par :

La redéfinition de méthodes (dans les classes dérivées).
Les interfaces et classes abstraites.
Types de polymorphisme
1. Surcharge de méthode (overriding)
C'est la réécriture d'une méthode dans une classe dérivée pour modifier son comportement. -->

Exemple : Redéfinition de méthode


<?php
class Animaux {
    public function parler() {
        return "L'animal fait un bruit.";
    }
}

class Chiens extends Animaux {
    public function parler() {
        return "Le chien aboie.";
    }
}

class Chats extends Animaux {
    public function parler() {
        return "Le chat miaule.";
    }
}

// Utilisation
$animal = new Animaux();
echo $animal->parler() . "\n";

$chien = new Chiens();
echo $chien->parler() . "\n";

$chat = new Chats();
echo $chat->parler() . "\n";
?>