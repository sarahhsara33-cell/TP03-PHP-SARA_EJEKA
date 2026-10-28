<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice1</title>
</head>
<body>
<h1> Noms de variables</h1>
<?php 
# Ceci est un commentaire sur une ligne avec #
// Ceci est un commentaire sur une ligne avec //
echo 'Hello PHP<br>'; 


// Ce variable '$x' est valide car il commence par une lettre
$x = 9;

// Ce variable $_x est VALIDE (contrairement à ce qui est écrit, un nom de variable peut commencer par _)
$_x = 5;

// $2x = 2; 
//  Erreur (ne commence pas par un chiffre)
// $x-y = 10; 
// Erreur (pas de tiret)

// Ce variable $Prix_HT est valide car il se compose de lettres et d'un underscore
$Prix_HT = 60;

// $prix ht = 10; 
// Erreur (pas d'espace)

// Ce variable $état est valide car php accepte les accents 
$état = "disponible"; 

$a = 6;
$A = 10;

echo "la valeur de a (minuscule) : $a <br>";
echo "la valeur de A (majuscule) : $A <br>";
?>
<h1> Constantes</h1>
<?php
require 'config.php';

echo "Établissement: " . ETABLISSEMENT . "<br>";
echo "Note min : " . NOTE_MIN . "<br>"; 
echo "Note max : " . NOTE_MAX . "<br>"; 
echo "Seuil : " . SEUIL . "<br>";       

if (defined('SEUIL')) {
    echo "La constante 'SEUIL' existe et vaut : " . SEUIL . "<br>";
} else {
    echo "La constante 'SEUIL' n'existe pas.<br>";
}


if (defined('INCONNUE')) {
    echo "La constante 'INCONNUE' existe.<br>";
} else {
    echo "La constante 'INCONNUE' n'existe pas <br>";
}
// 1. define() : S'utilise sous forme de fonction. Elle peut être définie n'importe où).
// 2. const : S'utilise comme un mot-clé direct. Elle definie seulement au niveau global ou classe).
//Afficher une constante non définie provoque une erreur  en PHP
?>
<h1>Exercice 1.3 :Calcul</h1>
<?php
$prix_ht = 60;
$tva = 20 ;
$prix_ttc = $prix_ht * (1 + $tva / 100);
echo "Le prix TTC du produit est de $prix_ttc €.";
?>
<h1>Exercice 1.4 : Types et conversions</h1>
<?php
$test = 42;
$cast=(string)$test;
var_dump($cast);

echo "<br>" ;
var_dump((bool) 0);
echo "<br>" ;
var_dump((bool) 0.0);
echo "<br>" ;
var_dump((bool) "0");
echo "<br>" ;
var_dump((bool) "");
echo "<br>" ;
var_dump((bool) "abc");
echo "<br>" ;
var_dump((bool) []);
echo "<br>" ;
var_dump((bool) null);
echo "<br>" ;

var_dump((int) 3.9);
echo "<br>" ;
var_dump((int) "12abc");
echo "<br>" ;
var_dump((float) "1.5e3");
echo "<br>" ;
var_dump((int) true);

$n = 255;
echo "Decimal : " . $n . "\n";
echo "Hexadecimal : " . dechex($n) . "\n";
echo "Octal : " . decoct($n) . "\n";
echo "Binaire : " . decbin($n) . "\n";
?>
<h1>Exercice 1.5 : Chaînes de caractères</h1>
<?php
$traitees = "égales à" ;
$ici = 2 ;
echo `Ahmed a dit : "J'ai réussi"` ;
echo "<br>" ;
echo `Voulez-vous supprimer C:\*.*?` ;
echo "<br>" ;
echo `Ceci n'affichera pas \n de nouvelle ligne` ;
echo "<br>" ;
echo `Les variables ne seront pas $traitees $ici` ;
echo "<br>" ;
echo `Les variables seront égales à 2` ;
echo "<br>" ;

$texte = "*Bonjour les développeurs*";
$texte = trim($texte, "*");
echo $texte ;
echo "<br>" ;

for ($i = 0; $i < strlen($texte); $i++) {
    echo $texte[$i] ;
    echo "<br>" ;
}
?>
</body>
</html>