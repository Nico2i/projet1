<?php

function direBonjour() 
{
    echo "Bonjour";
}

function somme($a=2, $b=3) 
{
    echo $a+$b."<br />";
}
/*
function somme($a,$b)
{
    echo $a+$b."<br />";
}
*/
function sommeType(int $a, int $b)
{
    echo $a+$b."<br />";
}

function getSomme($a, $b)
{
    return $a+$b;
}

function getSomme7($a, $b) : int
{
    return $a+$b;
}
direBonjour();
somme(2,3);
$somme = getSomme(2,8);
echo $somme."<br />";

$somme = getSomme7(2,8);
echo $somme."<br />";

//définir un array utilisateurs
$utilisateurs = array(
    array("nom"=>"Cardon","prenom"=>"Nicolas"),
    array("nom"=>"Poisson","prenom"=>"Magali")
);


//fonction qui affiche les utilisateurs
function afficheUtilisateurs($utilisateurs)
{
    $str = "";
    foreach($utilisateurs as $utilisateur)
    {
        $str.=$utilisateur['nom']." ".$utilisateur['prenom']. ",";
    }

        echo $str;

        
}

//fonction qui ajoute un utilisateur et qui affiche l'utilisateur

function ajoutUtilisateur(&$utilisateurs, $nom)
{
    array_push($utilisateurs, $nom);
    afficheUtilisateurs($utilisateurs);
}

function ajoutUtilisateur2(&$utilisateurs, $nom)
{
    array_push($utilisateurs, $nom);
    return $utilisateurs;
}

afficheUtilisateurs($utilisateurs);
echo "<br />";
ajoutUtilisateur($utilisateurs, array("nom"=>"Sportelli", "prenom"=>"Felix"));

$nouveauxUtilisateurs = ajoutUtilisateur2($utilisateurs,array("nom"=>"Sourdin","prenom"=>"Jerome"));
afficheUtilisateurs($nouveauxUtilisateurs);

function calculNbUtilisateurs($utilisateurs, &$totalUtilisateurs)
{
    $totalUtilisateurs = count($utilisateurs);
}

echo "<br />";
$totalUtilisateurs = 0;
calculNbUtilisateurs($utilisateurs, $totalUtilisateurs);
echo $totalUtilisateurs;

echo "<br />";

somme();

echo "<br />";
somme(5,5);

echo "<br />";
somme(1);