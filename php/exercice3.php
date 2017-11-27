<?php
$pere = array(
    "id"=>1,
    "prenom" => "Nicolas",
    "nom" => "Cardon"
);
var_dump($pere);
echo '<br />';
$mere = array(
    "id"=>1,
    "prenom" => "Magali",
    "nom" => "Cardon"
);

var_dump($mere);
echo '<br />';
$enfants = array(
    array("id"=>3, "prenom" => "LilyRose", "nom" => "Poisson"),
    array("id"=>4, "prenom" => "Eleonore", "nom" => "Poisson")
);

$famille = array(
    "pere" => $pere,
    "mere" => $mere,
    "enfant" => $enfants,
);
echo '<pre>';
var_dump($famille);
echo '</pre>';

echo $famille['enfant'][0]['prenom'];
echo '<br />';
$nbEnfant = count($famille['enfant']);
echo $famille['enfant'][$nbEnfant-1]['prenom'];
$famille["nb_enfant"] = $nbEnfant;

echo '<pre>';
var_dump($famille);
echo '</pre>';