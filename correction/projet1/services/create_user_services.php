<?php
require_once('dao/user_dao.php');

function verif_creation_creation_utilisateur($identifiant, $motdepasse, $email)
{
    if((empty($identifiant)) || (empty($motdepasse))) 
    {
        return null;
    }
    else 
    {
        $user = ajouter_utilisateur($identifiant, $email, $motdepasse);
        return $user;
    }
}