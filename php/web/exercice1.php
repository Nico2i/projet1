<?php
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

$ipUtilisateur = $_SERVER['REMOTE_ADDR'];
echo "Votre ip est ".$ipUtilisateur;

$port = $_SERVER['SERVER_PORT'];
echo ($port == 443) ? "Sécurisée" : "Nom sécurisé";

$page = $_SERVER['REQUEST_URI'];
echo "Page demandée: " .$page;

print_r($_GET);