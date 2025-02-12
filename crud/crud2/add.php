<?php

// on se connecte à la base de donnees
require('config.php');


// on recupere les informations envoyees de puis le formulaire grace à la method post
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$age= $_POST['age'];
$email= $_POST['email'];


// on prepare notre requete d'insertion dans une table

$sql = "INSERT INTO etudiant (nom, prenom, age, email) VALUES (?,?,?,?)";
$r= $pdo->prepare($sql);

// on l'excute en donnant les valeurs
$r->execute([$nom, $prenom, $age, $email]);

header("Location: liste.php");

?>