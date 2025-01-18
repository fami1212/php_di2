<?php

require_once 'Personne.php';
require_once 'Employee.php';
require_once 'Adherent.php';
require_once 'Livre.php';


$alioune = new Employee('Ndiaye', 'Euliw', 'euliw@gmail.com', 'IT');
$alioune->afficherInformations();
$bousso = new Adherent('Sakho', 'Mame Diarra', 'bousso@gmail.com', 'bk2919');
$bousso->afficherInformations();
$armel = new Livre('Armel','Armel', true);
$armel->changerDisponibilite();
$armel->afficherDetails();