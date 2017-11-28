<?php

$a = 5;

$a = $a +1;
$a += 1;
$a++;
++$a;

echo "valeurs de A :";
echo $a ."<br />";
echo $a++ ."<br />";
echo $a ."<br />";
echo ++$a ."<br />";

$a *= 5;
echo $a ."<br />";

$a /= 5;
echo $a ."<br />";

// PHP 7 (space ship operator)
var_dump(2<=>3); echo "<br />";
var_dump(3<=>3); echo "<br />";
var_dump(4<=>3); echo "<br />";

$age = 28;

// si age w18, indiquez mineur sinon majeur

$msg = ($age < 18) ? "mineur" : "majeur";
echo $msg;

$nom = "felix";
$defaut = "XY";
$msg = ($nom = "") ? $defaut : $nom;

$nomMarital = "";
$nomJeuneFille = "Poisson";
$defaut = "défaut";

//NOm vaut nom marital si il existe
//sinon vaut nom de jeune fille s'il existe
//sinon vaut défaut
$nom = ($nomMarital=="") ? (($nomJeuneFille == "") ? $defaut : $nomJeuneFille ) : $nomMarital; //ne marche pas
echo "<br />".$nom."<br />";

$nom1 = ($nomMarital =="") ? $nomJeuneFille : $nomMarital;
$nomJF = ($nomJeuneFille =="") ? $defaut : $nomJeuneFille;

//PHP7 : Null coalesce
$nom = $nomMarital ?? $nomJeuneFille ?? $defaut; // pour que cela fonctionne les valeurs doivent etre à null et non ""
echo "<br />".$nom."<br />";

