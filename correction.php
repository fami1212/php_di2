
<?php

// <!-- exercice 4 : Verfication de connexion  -->
// $motDePasse="armel";


// if ($motDePasse=="secret") {
//     echo "Connexion reussi";
// } else {
//     echo "Mot de passe incorect";
// }



// exercice 5: somme des entiers 

// $somme=0;
// for ($i=1; $i <= 10; $i++) {

//     // somme des nombres de 1 à 10
//     $somme += $i;
// }

// echo $somme;


// exercice 6 : compter jusqu'à 20

// $i = 0;
// while ($i <= 20) {
//     echo $i . " ";
//     $i++;
// }






// $i=0;

// while ($i <= 20) {
//     echo $i . " ";
//     $i++;
// }


// $motDePasse="secretdgfhgjhkjkjhgfdghjkl";

// if ($motDePasse=="secret") {
//     echo "Connexion reussi";
// } else {
//     echo "mot de passe incorrect";
// }


// $somme=0;

// for ($i=1; $i <=10 ; $i++) { 
//     $somme += $i;
// }

// echo $somme




// $i=0;
// while($i<= 20){
//     echo $i . " ";
//     $i++;
// }




$fruits=["Pomme","Banane","Mangue","Ananas","Kaki"];

echo "<ul>";

foreach ($fruits as $f) {


    echo "<li>".   "".$f.""    ."</li>";
    
}

echo "</ul>";


$fruits= [

    [
        "nom" => "Pomme",
        "qte" => 13
    ],
    [
        "nom" => "Banane",
        "qte" => 20
    ],
    [
        "nom" => "Mangue",
        "qte" => 26
    ]

];


foreach ($fruits as $f) {
   echo "{$f["nom"]}";
   echo " {$f["qte"]}";
}








$notes=[12,15,17,14,18];

// calculer et afficher la moyenne des notes 
$somme=0;

foreach ($notes as $n) {

    $somme =$somme + $n;
    
    $n++;
}

$moyenne=0;
$moyenne = $somme / count($notes);


echo $moyenne;




















?>