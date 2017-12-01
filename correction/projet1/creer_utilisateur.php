<?php
require_once('utils/fonctions_connexion.php');
require_once('utils/variables.php');
require_once('services/create_user_services.php');

session_start();

$utilisateur = recupUtilisateurConnecte();

if ( $utilisateur != null )
{    
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
    ?>
    <form method="post" action="<?=CREATION_USER_URL?>">
        <label for="identifiant">Identifiant</label>
        <input type="text" name="identifiant"/><br />
        <label for="email">Email</label>
        <input type="text" name="email"/><br />
        <label for="motdepasse">Mot de passe</label>
        <input type="password" name="motdepasse"/><br />
        <input type="submit" name="envoyer">
    </form>
    <?php
    }
    else
    {
        $identifiant = (isset($_POST['identifiant'])) ? ($_POST['identifiant']) : "";
        $motdepasse = (isset($_POST['motdepasse'])) ? ($_POST['motdepasse']) : "";
        $email = (isset($_POST['email'])) ? ($_POST['email']) : "";
        $user = verif_creation_creation_utilisateur($identifiant, $motdepasse, $email);
        
        if($user != null) {
            echo "L'utilisateur ". $user['identifiant'] ." a bien été ajouté";
        }
        else
        {
            echo "erreur lors de la création de l'utilisateur";
        }
    }
}
else
{
    echo "Vous devez être connecté pour afficher cette page <br/>";
    echo "<a href='".INDEX_URL."'>Se connecter</a>";
}