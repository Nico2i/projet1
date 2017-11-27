<?php
$tabEntier = array(10 , 11 , 12);
echo $tabEntier;
print_r($tabEntier);
echo "<br />";
var_dump($tabEntier);
echo "<br />";
$tabMixte = array(10, "Nicolas", 12);
echo "<br />";
print_r($tabMixte);
echo "<br />";
var_dump($tabMixte);
echo "<br />";
echo "2ème valeur = " . $tabMixte[1];
echo "<br />";
echo "Taille du tableau " . count($tabMixte);