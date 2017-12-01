<?php
require_once('utils/fonctions_connexion.php');
require_once('utils/variables.php');

session_start();

$utilisateur = recupUtilisateurConnecte();

if ( $utilisateur != null ){    
    echo "bonjour " . $utilisateur["nom"];
    echo "<a href="creer_utilisateur.php">Créer un utilisateur</a>;
}
else 
{
//    header('Location: form6.html');
    echo "Vous devez être connecté pour afficher cette page <br/>";
    echo "<a href='".INDEX_URL."'>Se connecter</a>";
}