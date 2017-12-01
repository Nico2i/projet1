<?php
    session_start();
    if(isset($_POST['login']) && isset($_POST['mdp']) && $_POST['login']=="Nicolas" && $_POST['mdp']=="root")
    {
        echo "Bienvenue ". $_POST['login'].", vous êtes dorénavant connectés";
        $utilisateur = array(
            "identifiant" = $identifiant;
        );
        $_SESSION['utilisateur']= $utilisateur;
        header("Location: accueil.php");
    }
    else{
        echo "Echec de connexion";
    }
