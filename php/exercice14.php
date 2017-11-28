<?php
$str = "Bonjour, c'est Nicolas. Comment ça va ? Ici il pleut\n";

echo $str;
//mettre tout en majuscule

echo strtoupper($str);
echo "<br />";

//mettre tout en minuscule
echo strtolower($str)."\n";

//mettre le premier mot en majuscule, capitalize
echo ucfirst($str)."\n";

//antislasher
echo addslashes($str)."\n";

//recuperer la position du caractère ","
echo strpos($str, ",")."\n";

//extraire à partir de position la chaine
echo substr($str,7)."\n";

//supprimer les espaces au debut et à la fin de ma chaine
$souschaine = substr($str, 8);
echo trim($souschaine)."\n";

//extraire une partie de chaine sur 5 caracteres
echo substr($str, 8, 5) ."\n";

print_r(explode(".", $str));

$participants = array("fred","nico","jeje");
print_r(implode(";",$participants));

$msg = "Bonjour #nom# et bienvenue #nom#";
echo substr_replace($msg, "felix", 8, 5);
echo str_replace( "#nom#", "felix", $msg);
echo str_replace( "#nom#", "felix", $msg, $nb);
echo $nb;